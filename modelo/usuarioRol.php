<?php

class UsuarioRol
{

    private $objUsuario;
    private $objRol;
    private $mensajeOperacion;

    public function __construct()
    {

        $this->objUsuario = null;
        $this->objRol = null;
        $this->mensajeOperacion = "";

    }

    public function setear($objUsuario, $objRol)
    {

        $this->setObjUsuario($objUsuario);
        $this->setObjRol($objRol);
    }

    // METODOS DE ACCESO GET

    public function getObjUsuario()
    {
        return $this->objUsuario;
    }

    public function getObjRol()
    {
        return $this->objRol;
    }

    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }

    // METODOS DE ACCESO SET

    public function setObjUsuario($valor)
    {
        $this->objUsuario = $valor;
    }

    public function setObjRol($valor)
    {
        $this->objRol = $valor;
    }

    public function setMensajeOperacion($valor)
    {
        $this->mensajeOperacion = $valor;
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM usuario WHERE id_usuario= " . $this->getObjUsuario()->getIdUsuario() . " AND id_rol= " . $this->getObjRol()->getIdRol();
        //echo $sql;

        if ($base->Iniciar()) {

            $res = $base->Ejecutar($sql);

            if ($res > -1) {
                if ($res > 0) {
                    $objRol = null;
                    $objUsuario = null;
                    $row = $base->Registro();

                    if ($row['id_rol'] != null) {
                        $objRol = new Rol();
                        $objRol->setIdRol($row['idrol']);
                        $objRol->cargar();
                    }

                    if ($row['id_usuario'] != null) {

                        $objUsuario = new Usuario();
                        $objUsuario->setIdUsuario($row['id_usuario']);
                        $objUsuario->cargar();
                    }
                    $this->setear($objUsuario, $objRol);
                }
            }
        } else {
            $this->setMensajeOperacion("usuario_rol->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();

        $sql = "INSERT INTO usuario_rol(id_usuario, id_rol)VALUES(" . $this->getObjUsuario()->getIdUsuario() . "," . $this->getObjRol()->getIdRol() . ");";
        //echo $sql;
        if ($base->Iniciar()) {

            if ($base->Ejecutar($sql)) {
                $resp = true;

            } else {
                $this->setMensajeOperacion("usuario_rol->insertar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("usuario_rol->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = " UPDATE usuario_rol SET ";
        $sql .= " id_rol = " . $this->getObjRol()->getIdRol();
        $sql .= " WHERE id_usuario =" . $this->getObjUsuario()->getIdUsuario();
        // echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;

            } else {
                $this->setMensajeOperacion("usuario_rol->modificar 1: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("usuario_rol->modificar 2: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM usuario_rol WHERE id_usuario=" . $this->getObjUsuario()->getIdUsuario() . " AND id_rol=" . $this->getObjRol()->getIdRol();
        //echo $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setMensajeOperacion("usuario_rol->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeOperacion("usuario_rol->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {

        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM usuario_rol ";
        //echo $sql;
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        //  echo $sql;

        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {

                    $objUsuario = null;
                    $objRol = null;

                    if ($row['id_rol'] != null) {
                        $objRol = new Rol();
                        $objRol->setIdRol($row['id_rol']);
                        $objRol->cargar();
                    }

                    if ($row['id_usuario'] != null) {
                        $objUsuario = new Usuario();
                        $objUsuario->setIdUsuario($row['id_usuario']);
                        $objUsuario->cargar();
                    }

                    $obj = new UsuarioRol();
                    $obj->setear($objUsuario, $objRol);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            //     $this->setmensajeoperacion("reclamo->listar: ".$base->getError());
        }
        return $arreglo;
    }

}

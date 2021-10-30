<?php
class auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio;
    private $mensajeOperacion;

    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->objDuenio = "";
        $this->mensajeOperacion = "";
    }

    public function getPatente()
    {
        return $this->patente;
    }

    public function setPatente($patente)
    {
        $this->patente = $patente;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getObjDuenio()
    {
        return $this->objDuenio;
    }

    public function setObjDuenio($objDuenio)
    {
        $this->objDuenio = $objDuenio;
    }

    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }

    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->mensajeOperacion = $mensajeOperacion;
    }

    public function setear($patente, $marca, $modelo, $objDuenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjDuenio($objDuenio);
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM 'auto' WHERE id = " . $this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(
                        $row['patente'],
                        $row['marca'],
                        $row['modelo'],
                        $row['dni_duenio']
                    );
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $objPersona = $this->getObjDuenio();
        $dni = $objPersona[0]->getNroDni();
        $sql = "UPDATE auto SET patente = '{$this->getPatente()}', marca = '{$this->getMarca()}' ,
        modelo = {$this->getModelo()}, dni_duenio = '$dni'
        WHERE patente = '" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM 'auto' WHERE patente = '" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new auto();
                    $obj->setear(
                        $row['patente'],
                        $row['marca'],
                        $row['modelo'],
                        $row['dni_duenio']
                    );
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setMensajeOperacion("Tabla->listar: " . $base->getError());
        }
        return $arreglo;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $objPersona = $this->getObjDuenio();
        $dni = $objPersona[0]->getNroDni();
        $sql = "INSERT INTO auto (dni_duenio, patente, modelo, marca)
                VALUES('$dni', '" . $this->getPatente() . "' , '" . $this->getModelo() . "' , '" . $this->getMarca() . "')";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setPatente($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
        }
        return $resp;
    }
}

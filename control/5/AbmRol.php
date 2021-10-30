<?php
// include_once '../../modelo/rol.php';
class AbmRol
{
    private function cargarObjeto($parametro)
    {
        $rol = null;
        if (array_key_exists('id_rol', $parametro) && array_key_exists('rol_descripcion', $parametro)) {
            $rol = new rol();
            $rol->setear(
                $parametro['id_rol'],
                $parametro['rol_descripcion'],
            );
        }
        return $rol;
    }

    private function cargarObjetoConClave($parametro)
    {
        $objRol = null;
        if (isset($parametro['id_rol'])) {
            $objRol = new rol();
            $objRol->setear($parametro['id_rol'], null);
        }
        return $objRol;
    }

    private function seteadosCamposClaves($parametro)
    {
        $resp = false;
        if (isset($parametro)) {
            $resp = true;
        }
        return $resp;
    }

    public function alta($parametro)
    {
        $respuesta = false;
        $objRol = $this->cargarObjeto($parametro);
        if ($objRol != null and $objRol->insertar()) {
            $respuesta = true;
        }
        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objRol = $this->cargarObjetoConClave($parametro);
            if ($objRol != null && $objRol->eliminar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function modificar($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objRol = $this->buscar($parametro);
            //$objRol = $this->cargarObjeto($parametro);
            if ($objRol[0] != null && $objRol[0]->modificar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function buscar($param)
    {
        $where = " true ";
        if ($param != null) {
            if (isset($param['id_rol'])) {
                $where .= " and id_rol = '" . $param['id_rol'] . "'";
            }

            if (isset($param['rol_descripcion'])) {
                $where .= " and rol_descripcion = '" . $param['rol_descripcion'] . "'";
            }
        }
        $arreglo = rol::listar($where);
        return $arreglo;
    }
}

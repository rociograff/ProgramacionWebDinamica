<?php

class AbmPersona
{

    private function cargarObjeto($parametro)
    {
        $persona = null;
        if (array_key_exists('nroDni', $parametro)) {
            $persona = new persona();
            $persona->setear(
                $parametro['nroDni'],
                $parametro['nombre'],
                $parametro['apellido'],
                $parametro['domicilio'],
                $parametro['fechaNac'],
                $parametro['telefono']
            );
        }
        return $persona;
    }

    private function cargarObjetoConClave($parametro)
    {
        $obj = null;
        if (isset($parametro['nroDni'])) {
            $obj = new persona();
            $obj->setear($parametro['nroDni'], null, null, null, null, null);
        }
        return $obj;
    }

    private function seteadosCamposClaves($parametro)
    {
        $resp = false;
        if (isset($parametro['nroDni'])) {
            $resp = true;
        }
        return $resp;
    }

    public function alta($parametro)
    {
        $respuesta = false;
        //$parametro['nroDni'] = null;
        $objPersona = $this->cargarObjeto($parametro);
        if ($objPersona != null && $objPersona->insertar()) {
            $respuesta = true;
        }
        return $respuesta;
    }

    public function baja($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objPersona = $this->cargarObjetoConClave($parametro);
            if ($objPersona != null && $objPersona->eliminar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function modificar($parametro)
    {
        $respuesta = false;
        if ($this->seteadosCamposClaves($parametro)) {
            $objPersona = $this->buscar($parametro);
            $objPersona[0] = $this->cargarObjeto($parametro);
            if ($objPersona != null && $objPersona[0]->modificar()) {
                $respuesta = true;
            }
        }
        return $respuesta;
    }

    public function buscar($param)
    {
        $where = " true ";
        if ($param <> null) {
            if (isset($param['nroDni']))
                $where .= " and nro_dni = '" . $param['nroDni'] . "'";
            if (isset($param['nombre']))
                $where .= " and nombre = '" . $param['nombre'] . "'";
            if (isset($param['apellido']))
                $where .= " and apellido = '" . $param['apellido'] . "'";
            if (isset($param['fechaNac']))
                $where .= " and fecha_nac = '" . $param['fechaNac'] . "'";
            if (isset($param['telefono']))
                $where .= " and telefono = '" . $param['telefono'] . "'";
            if (isset($param['domicilio']))
                $where .= " and domicilio = '" . $param['domicilio'] . "'";
        }
        $arreglo = persona::listar($where);

        // $arreglo = [];

        // $arreglo = Persona::listar();
        return $arreglo;
    }
}

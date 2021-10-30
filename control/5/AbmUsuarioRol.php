<?php
class AbmUsuarioRol
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    private function cargarObjeto($param)
    {
        //verEstructura($param);
        $objtUsuarioRol = null;
        $objRol = null;
        $objUsuario = null;
        //print_r($param);
        if (array_key_exists('id_rol', $param) and $param['id_rol'] != null) {
            $objRol = new Rol();
            $objRol->setIdrol($param['id_rol']);
            $objRol->cargar();
        }

        if (array_key_exists('id_usuario', $param) && $param['id_usuario'] != null) {
            $objUsuario = new Usuario();
            $objUsuario->setIdUsuario($param['id_usuario']);
            $objUsuario->cargar();
        }

        $objUsuarioRol = new UsuarioRol();
        $objUsuarioRol->setear($objUsuario, $objRol);

        return $objUsuarioRol;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return object
     */
    private function cargarObjetoConClave($param)
    {
        $objUsuarioRol = null;
        //print_R ($param);
        if (isset($param['id_usuario']) && isset($param['id_rol'])) {
            $objUsuarioRol = new UsuarioRol();
            $objUsuarioRol->setear($objUsuario, $objRol);
        }
        return $objUsuarioRol;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {

        $resp = false;
        if (isset($param['id_usuario']) && isset($param['id_rol']));

        $resp = true;
        return $resp;

    }

    /**
     *
     * @param array $param
     */
    public function alta($param)
    {

        //  echo "entramos a alta";

        $resp = false;
        $objUsuarioRol = $this->cargarObjeto($param);
        // verEstructura($elObjtAuto);

        //print_r($objUsuarioRol);
        if ($objUsuarioRol != null and $objUsuarioRol->insertar()) {
            $resp = true;
        }

        return $resp;
    }

    /**
     * permite eliminar un objeto
     * @param array $param
     * @return boolean
     */

    public function baja($param)
    {
        //verEstructura($param);
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {

            $objUsuarioRol = $this->cargarObjeto($param);

            if ($objUsuarioRol != null and $objUsuarioRol->eliminar()) {

                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        //echo "Estoy en modificacion";
        //print_R($param);
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {

            $objUsuarioRol = $this->cargarObjeto($param);

            if ($objUsuarioRol != null and $objUsuarioRol->modificar()) {
                $resp = true;

            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */

    public function buscar($param)
    {
        // print_R ($param);

        $where = " true ";
        if ($param != null) {
            if (isset($param['id_usuario'])) {
                $where .= " and id_usuario ='" . $param['id_usuario'] . "'";
            }

            if (isset($param['id_rol'])) {
                $where .= " and id_rol ='" . $param['id_rol'] . "'";
            }

        }

        $arreglo = UsuarioRol::listar($where, "");
        return $arreglo;

    }
}

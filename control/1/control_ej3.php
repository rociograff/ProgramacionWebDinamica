<?php
class control_ej3
{
    public function armadoString($array)
    {
        $nombre = $array['nombre'];
        $apellido = $array['apellido'];
        $edad = $array['edad'];
        $direccion = $array['direccion'];
        $texto = "Hola yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;
        return $texto;
    }
}

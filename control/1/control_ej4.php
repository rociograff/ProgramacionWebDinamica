<?php
class control_ej4
{
    public function armadoString($array)
    {
        $nombre = $array['nombre'];
        $apellido = $array['apellido'];
        $edad = $array['edad'];
        $direccion = $array['direccion'];
        if ($edad >= 18) {
            $texto =  "Hola yo soy " . $nombre . " " . $apellido . ", soy mayor de edad y vivo en " . $direccion;
        } else {
            $texto = "Hola yo soy " . $nombre . " " . $apellido . ", NO soy mayor de edad y vivo en " . $direccion;
        }
        return $texto;
    }
}

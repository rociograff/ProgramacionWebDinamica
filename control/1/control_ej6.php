<?php
class control_ej6
{
    public function armadoDatos($array)
    {
        $nombre = $array['nombre'];
        $apellido = $array['apellido'];
        $edad = $array['edad'];
        $direccion = $array['direccion'];
        $texto = "Hola yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;
        return $texto;
    }

    public function armadoCheckboxes($array)
    {
        $cadena = "Deporte(s) que practico:<br><ul>";
        if (isset($array['eje5'])) {
            if (!empty($array['dep'])) {
                foreach ($array['dep'] as $value) {
                    $cadena .= "<li>$value</li>";
                }
            } else {
                $cadena = "No practico deportes.";
            }
        }
        return $cadena;
    }
}

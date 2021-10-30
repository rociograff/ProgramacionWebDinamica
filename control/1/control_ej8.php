<?php
class control_ej8
{
    public function calcularPrecio($array)
    {
        $edad = $array['edad'];
        $estudiante = $array['estudiante'];

        if ($edad < 12 && $estudiante == 'si') {
            $precio = 160;
        } else if ($edad >= 12 && $estudiante == 'si') {
            $precio = 180;
        } else {
            $precio = 300;
        }
        return $precio;
    }
}

<?php
class control_ej5
{
    public function armadoDatos()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $texto = "Hola yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;
        return $texto;
    }

    public function armadoEstudios()
    {
        $estudios = $_POST['estudio'];
        $sexo = $_POST['sexo'];
        $cadena = $estudios. ", ". $sexo;
        return $cadena;
    }
}

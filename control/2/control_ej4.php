<?php
class control_ej4
{
    public function crearTexto($array)
    {
        $campos = ["Titulo: ", "Actores: ", "Director: ", "Guion: ", "Produccion: ", "Año: ", "Nacionalidad: ", "Genero: ", "Duracion: ", "Restricciones de edad: ", "Sinopsis: "];
        $i = 0;
        $texto = "";
        foreach ($array as $dato) {
            $texto .= "<b>" . $campos[$i] . "</b>$dato<br>";
            $i++;
        }
        return $texto;
    }

    public function cargarImagen($datosImg)
    {
        if ($datosImg['poster']['error'] <= 0) {
            $nombre = $datosImg['poster']['name'];
            $dir = '../../../archivos/';
            $exito = false;

            if (!copy($datosImg['poster']['tmp_name'], $dir . $datosImg['poster']['name'])) {
                $retorno = "ERROR: No se pudo cargar el archivo";
            } else {
                $exito = true;
                $retorno = "El archivo: " . $datosImg['poster']['name'] . " se ha copiado con exito <br/>";
            }
        } else {
            $retorno = "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }

        if ($exito) {
            $dir .= $nombre;
            $retorno = "<img alt=$nombre src='$dir'>";
        }
        return $retorno;
    }
}

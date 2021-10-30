<?php

class control_ej1
{
    public function controlArchivos($datosArchivos)
    {
        if ($datosArchivos['archivo']['error'] <= 0) {
            echo "Nombre: " . $datosArchivos['archivo']['name'] . "<br/>";
            echo "Tipo: " . $datosArchivos['archivo']['type'] . "<br/>";
            echo "Tamaño: " . ($datosArchivos['archivo']['size'] / 1024) . "kB<br/>";
            echo "Carpeta Temporal: " . $datosArchivos['archivo']['tmp_name'] . "<br/>";
            $tamanio = $datosArchivos['archivo']['size'];
            $dir = '../../../archivos/';

            if (!copy($datosArchivos['archivo']['tmp_name'], $dir . $datosArchivos['archivo']['name'])) {
                $texto = "ERROR: No se pudo cargar el archivo";
            } else {
                $texto = "El archivo: " . $datosArchivos['archivo']['name'] . " se ha copiado con exito <br/>";
            }
        } else {
            $texto = "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }
        return $texto;
    }
}

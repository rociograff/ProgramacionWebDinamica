<?php
class control_ej2
{
    public function leerArchivoTxt($datosArchivos)
    {
        if ($datosArchivos['archivo']['error'] <= 0) {
            $nombre = $datosArchivos['archivo']['name'];
            $dir = '../../../archivos/';
            $exito = false;
            $texto = "";

            if (!copy($datosArchivos['archivo']['tmp_name'], $dir . $datosArchivos['archivo']['name'])) {
                $texto = "ERROR: No se pudo cargar el archivo";
            } else {
                $exito = true;
                $texto = "El archivo: " . $datosArchivos['archivo']['name'] . " se ha copiado con exito <br/>";
            }
        } else {
            $texto = "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        }

        if ($exito) {
            $texto = file_get_contents($dir . $nombre);
        }
        return $texto;
    }
}

<?php

$titulo = 'TP3 - EJ1';

include_once '../../../estructura/cabecera.php';

?>

<div class="container d-flex flex-column min-vh-100">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
                <div class="card-body p-4">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                            <p class="bp-2 fs-6">
                                Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo cargado, en caso contrario mostrar un mensaje indicando el problema.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>

            <form id="eje1tp3" name="eje1tp3" action="subidaArchivo.php" enctype="multipart/form-data" method="POST" data-toggle="validator">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="archivos">Seleccione un archivo</label>
                        <input type="file" name="archivo" id="archivo" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
<?php
$titulo = "TP2 - EJ3";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
                        Validar lo siguiente:
                        <ul class="fs-6">
                            <li class="fs-6">El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo aceptar números.</li>
                            <li class="fs-6">El campo duración debe permitir un máximo de 3 números.</li>
                            <li class="fs-6">Todos los datos son obligatorios.</li>
                            <li class="fs-6">Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el formulario.</li>
                            <li class="fs-6">El botón “Borrar” debe limpiar el formulario.</li>
                        </ul>
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <div class="fs-6">
            <i class="bi bi-pencil-square"></i><B>&nbsp;Cinem@s</B>
            </div>
        </div>

        <div class="card-body">
            <form id="eje3tp3" name="eje3tp3" enctype="multipart/form-data" action="mostrarDatos.php" method="post">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Titulo" class="mb-2"><B>Título</B></label>
                        <input type="text" name="Titulo" id="Titulo" class="form-control" placeholder="Título" required>
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="Actores" class="mb-2"><B>Actores</B></label>
                        <input type="text" name="Actores" id="Actores" class="form-control" placeholder="Actores" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Director" class="mb-2"><B>Director</B></label>
                        <input type="text" name="Director" id="Director" class="form-control" placeholder="Director" required>
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="Guion" class="mb-2"><B>Guión</B></label>
                        <input type="text" name="Guion" id="Guion" class="form-control" placeholder="Guión" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Produccion" class="mb-2"><B>Producción</B></label>
                        <input type="text" name="Produccion" id="Produccion" class="form-control" required>
                    </div>

                    <div class="col-md-1 mb-2">
                        <label for="Año" class="mb-2"><B>Año</B></label>
                        <input type="text" name="Año" id="Año" class="form-control" maxlength="4" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="Nacionalidad" class="mb-2"><B>Nacionalidad</B></label>
                        <input type="text" name="Nacionalidad" id="Nacionalidad" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-2">
                        <label for="Genero" class="mb-2"><B>Género</B></label>
                        <select class="form-select" id="Genero" name="Genero" required>
                            <option selected disabled value="">Seleccione...</option>
                            <option value="comedia">Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romanticas">Románticas</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otras">Otras</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-2">
                        <label for="Duracion" class="mb-2"><B>Duración</B></label>
                        <input type="text" name="Duracion" id="Duracion" class="form-control" maxlength="3" required><small>(minutos)</small>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="row">
                            <label for="restricciones" class="mb-2"><B>Restricciones de edad</B></label>
                        </div>

                        <input type="radio" class="form-check-input" name="restricciones" value="atp" required>Todos los públicos
                        <input type="radio" class="form-check-input" name="restricciones" value="m7" required>Mayores de 7
                        <input type="radio" class="form-check-input" name="restricciones" value="m18" required>Mayores de 18
                    </div>
                </div>

                <div class="row">
                    <label for="sinopsis" class="mb-2"><B>Sinopsis</B></label>
                    <textarea name="sinopsis" id="sinopsis" rows="4" required></textarea>
                </div>

                <div class="row">
                    <label for="poster" class="mb-2"><b>Póster</b></label>
                    <input type="file" class="form-control" name="poster" id="poster" accept="image/*" required>
                </div>

                <div class="d-grid d-md-flex justify-content-md-end mt-3">
                    <button class="btn btn-primary me-md-2" type="submit" value="enviar">Enviar</button>
                    <button class="btn btn-secondary" type="reset" value="borrar">Borrar</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
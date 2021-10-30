<?php
$titulo = "TP4 - EJ9";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php” busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form id="tp4ej9" name="tp4ej9" method="post" action="accionBuscarPersona.php">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="nroDni" name="nroDni" type="text" placeholder="DNI" maxlength="8" required>
                <label for="nroDni">Ingrese su documento</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
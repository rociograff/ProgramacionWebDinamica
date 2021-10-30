<?php
$titulo = "TP4 - EJ7";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                    Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form id="tp4ej7" name="tp4ej7" method="post" action="accionNuevoAuto.php" data-toggle="validator">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="Patente" required>
                <label for="dni">Ingrese su patente</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="marca" name="marca" type="text" placeholder="Marca" required>
                <label for="dni">Ingrese la marca del vehiculo</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="modelo" name="modelo" type="text" placeholder="Modelo" required>
                <label for="dni">Ingrese el modelo del vehiculo</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="dniDuenio" name="dniDuenio" type="text" maxlength="8" placeholder="DNI" required>
                <label for="dniDuenio">Ingrese su DNI</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
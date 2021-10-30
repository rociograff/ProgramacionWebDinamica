<?php
$titulo = "TP4 - EJ4";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form id="tp4ej4" name="tp4ej4" method="post" action="accionBuscarAuto.php" data-toggle="validator">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="ABC 123" required>
                <label for="patente">Ingrese una patente</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Listar">Listar</button>
            </div>
        </div>
    </form>
</div>



<?php
include_once '../../../estructura/pie.php';
?>
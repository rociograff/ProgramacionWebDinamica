<?php
$titulo = "TP4 - EJ5";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una página "listaPersonas.php" que muestre un listado con las personas que se
                        encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                        los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form class="text-center mt-4" action="listaPersonas.php">
        <button class="btn btn-primary" type="submit">Listar</button>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
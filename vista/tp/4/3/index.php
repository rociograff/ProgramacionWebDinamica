<?php
$titulo = "TP4 - EJ3";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form class="text-center mt-4" action="accionAutos.php">
        <button class="btn btn-primary" type="submit">Listar</button>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
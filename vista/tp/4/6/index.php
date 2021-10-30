<?php
$titulo = "TP4 - EJ6";
include_once '../../../estructura/cabecera.php';
?>

<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                    Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form id="tp4ej6" name="tp4ej6" method="post" action="accionNuevaPersona.php" data-toggle="validator">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="nroDni" name="nroDni" type="text" maxlength="8" minlength="7" placeholder="DNI" required>
                <label for="nroDni">Ingrese su DNI</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido" required>
                <label for="apellido">Ingrese su apellido</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                <label for="nombre">Ingrese su nombre</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="fechaNac" name="fechaNac" type="date" placeholder="Fecha de Nacimiento" required>
                <label for="fechaNac">Ingrese su fecha de nacimiento</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Teléfono" required>
                <label for="telefono">Ingrese su teléfono</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="domicilio" name="domicilio" type="text" placeholder="Domicilio" required>
                <label for="domicilio">Ingrese su domicilio</label>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
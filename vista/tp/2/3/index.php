<?php
$titulo = "TP2 - EJ3";
include_once '../../../estructura/cabecera.php';
?>
<div class="container d-flex flex-column min-vh-100">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario y la password para loguearse. Los datos del formulario son enviados a un script verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo y en caso contrario un mensaje de error.
                    </p>
                    <p class="bp-2 fs-6">
                        Realizar la validación de este formulario. Chequear no solo que se hayan cargado el usuario y la contraseña antes de ser enviados al servidor sino que también debe realizar un control de contraseña segura (La contraseña debe tener como mínimo 8 caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener letras y números).
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <form class="form-signin" id="eje3tp2" name="eje3tp2" action="verificaPass.php" method="post">
        <div class="login container col-md-3">
            <h1 class="h3 mb-3 text-center">Member Login</h1>
            <div class="form-group">
                <div class="input-group mt-3">
                    <span class="input-group-text"> <i class="fa fa-user"></i></span>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mt-3">
                    <span class="input-group-text"> <i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="password" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="d-grid mb-5 mt-3">
                <button class="btn btn-success" type="submit">Login</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>

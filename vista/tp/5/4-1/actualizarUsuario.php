<?php
include_once '../../../estructura/cabecera.php';
$titulo = "TP5 - EJ4";

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

$listaUsuario = $abmUsuario->buscar($datos);
$objUsuario = $listaUsuario[0];

if (isset($_GET['message'])) {
    print '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
}
?>

<div class="container">
    <form id="tp5ej4-2" name="tp5ej4-2" method="post" action="accionActualizarUsuario.php">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <?php
                echo "<input class='form-control' id='id_usuario' name='id_usuario' type='hidden' value='{$datos['id_usuario']}'>";
                ?>
            </div>
        </div>

        <div class="form-floating col-md-4 mb-3">
            <?php
            echo "<input class='form-control' id='usuarioNuevo' name='usuario_nombre' type='text' placeholder='Nuevo usuario' value='{$objUsuario->getUsuarioNombre()}' maxlength='50' required>";
            ?>
            <label for="emailNuevo">Ingrese su nuevo usuario</label>
        </div>

        <div class="form-floating col-md-4 mb-3">
            <?php
            echo "<input class='form-control' id='emailNuevo' name='usuario_email' type='text' placeholder='Nuevo email' value='{$objUsuario->getUsuarioEmail()}' maxlength='254' required>";
            ?>
            <label for="emailNuevo">Ingrese su nuevo email</label>
        </div>


        <div class="form-floating col-md-4 mb-3">
            <?php
            echo "<input class='form-control' id='passwordNueva' name='usuario_password' type='password' placeholder='Contraseña nueva' value='{$objUsuario->getUsuarioPassword()}' maxlength='16' required>";
            ?>
            <label for="emailNuevo">Ingrese su nueva contraseña</label>
        </div>

        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Editar">Editar</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';

<?php
$titulo = "TP2 - EJ4";
include_once '../../../estructura/cabecera.php';
include '../../../../control/2/control_ej4.php';

$control = new control_ej4();
$texto = $control->crearTexto($_POST);
$img = $control->cargarImagen($_FILES);
?>

<div class="container-main">
    <div class="card bg-light bg-gradient rounded-3 col-md-6">
        <div class="card-header border-0" style="height: 30px;">
            <a href="../4" class="position-absolute top-0 end-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                </svg>
            </a>
        </div>

        <div class="card-body">
            <h1 class="text-primary">La película introducida es</h1>
            <p class="text-success">
                <?php
echo $texto;
?>
            </p>
        </div>
    </div>
    <div class="col-md-6">

        <?php
echo $img;
?>

    </div>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
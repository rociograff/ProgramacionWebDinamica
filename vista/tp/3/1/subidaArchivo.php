<?php
$titulo = 'TP3 - EJ1';
include_once '../../../estructura/cabecera.php';
include '../../../../control/3/control_ej1.php';

$obj = new control_ej1();
?>

<div class="container-main">

    <?php
    $texto = $obj->controlArchivos($_FILES);
    echo "<br>" . $texto;
    ?>

</div>

<?php
include_once '../../../estructura/pie.php';
?>
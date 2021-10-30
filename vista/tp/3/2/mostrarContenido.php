<?php
$titulo = "TP3 - EJ2";
include_once '../../../estructura/cabecera.php';
include '../../../../control/3/control_ej2.php';

$control = new control_ej2();

?>

<div class="container-main">

    <?php
    $texto = $control->leerArchivoTxt($_FILES);
    ?>

    <textarea rows="4" cols="100">

    <?php
    echo $texto;
    ?>

    </textarea>

</div>

<?php
include_once '../../../estructura/pie.php';
?>
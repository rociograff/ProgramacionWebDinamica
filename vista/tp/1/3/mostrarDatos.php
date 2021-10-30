<?php

$titulo = 'TP1 - EJ3';

include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej3.php';

$control = new control_ej3();
$texto = $control->armadoString($_POST);
?>
<div class="container">
<?php
echo $texto;
?>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
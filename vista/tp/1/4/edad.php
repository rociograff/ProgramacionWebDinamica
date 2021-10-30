<?php
$titulo = 'TP1 - EJ4';

include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej4.php';

$control = new control_ej4();
$texto = $control->armadoString($_GET);
?>

<div class="container">
<?php
echo $texto;
?>
</div>

<?php
include_once '../../../estructura/pie.php';
?>

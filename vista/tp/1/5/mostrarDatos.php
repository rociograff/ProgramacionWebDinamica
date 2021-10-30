<?php
$titulo = 'TP1 - EJ5';

include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej5.php';

$control = new control_ej5();
$texto = $control->armadoDatos($_POST);
$cadena = $control->armadoEstudios($_POST);
?>

<div class="container">
<?php
echo "$texto<br>";
echo "<br>$cadena";
?>
</div>

<?php
include_once '../../../estructura/pie.php';

<?php
$titulo = 'TP1 - EJ8';

include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej8.php';

$control = new control_ej8();
$precio = $control->calcularPrecio($_POST);
?>

<div class="container">
<?php
echo "El precio es de: $" . $precio;
?>

</div>

<?php
include_once '../../../estructura/pie.php';

<?php

$titulo = 'TP1 - EJ6';

include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej6.php';

$control = new control_ej6();
$texto = $control->armadoDatos($_POST);
$cadena = $control->armadoCheckboxes($_POST);

?>
<div class="container">
<?php
echo "$texto<br>";
echo $cadena;
?>
</div>
<?php

include_once '../../../estructura/pie.php';

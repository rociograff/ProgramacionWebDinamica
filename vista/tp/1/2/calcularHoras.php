<?php
$titulo = 'TP1 - EJ2';

include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej2.php';

$control = new control_ej2();
?>
<div class="container">
<?php
echo $control->recorrerYArmarArray($_POST);
?>
</div>

<?php
include_once '../../../estructura/pie.php';
?>

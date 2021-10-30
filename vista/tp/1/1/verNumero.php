<?php
$titulo = "TP1 - EJ1";
include_once '../../../estructura/cabecera.php';
include '../../../../control/1/control_ej1.php';

$control = new control_ej1();
$texto = $control->readNumber($_POST);
?>

<div class="container">
<?php
echo "<p>$texto</p>";
echo "<a href='index.php'>Consultar otro número</a><br/>";
?>
</div>

<?php
include_once '../../../estructura/pie.php';
?>

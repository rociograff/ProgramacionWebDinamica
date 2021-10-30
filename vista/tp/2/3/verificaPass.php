<?php
$titulo = "TP2 - EJ3";
include '../../../../control/2/control_ej3.php';
include_once '../../../estructura/cabecera.php';

$arrayUsers = [
    0 => [
        "username" => "Juan",
        "password" => "password123",
    ],
    1 => [
        "username" => "Pepe",
        "password" => "password456",
    ],
    2 => [
        "username" => "Paco",
        "password" => "password789",
    ],
];

$control = new control_ej3();
$texto = $control->verifyForm($arrayUsers, $_POST);
?>

<div class="container text-center">
<?php
echo $texto;
?>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
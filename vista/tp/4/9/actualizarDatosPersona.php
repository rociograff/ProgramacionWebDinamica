<?php
$titulo = "TP4 - EJ9";
include_once "../../../estructura/cabecera.php";

$datos = data_submitted();

$abmPersona = new AbmPersona();
$arrayPersona = [
    "nroDni" => $datos["nroDni"]
];

$personaEncontrada = $abmPersona->buscar($arrayPersona);

$exito = $abmPersona->modificar($datos);

?>

<div class="container">
    <?php
    if ($exito) {
        echo "<h3>Datos modificados correctamente</h3>";
    } else {
        echo "<h3>Error al modificar los datos</h3>";
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";

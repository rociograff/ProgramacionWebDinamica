<?php
$titulo = "TP4 - EJ8";
include_once "../../../estructura/cabecera.php";

$datos = data_submitted();
$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();

$arrayAuto = [
    "patente" => $datos["patente"]
];

$arrayPersona = [
    "nroDni" => $datos["nroDni"]
];

$personaEncontrada = $abmPersona->buscar($arrayPersona);
$autoEncontrado = $abmAuto->buscar($arrayAuto);
?>

<div class="container">
    <?php
    $exito = false;
    if (count($personaEncontrada) <= 0) {
        echo "<h3>El DNI ingresado no se encuentra registrado</h3>";
    } else if (count($autoEncontrado) <= 0) {
        echo "<h3>La patente ingresada no se encuentra registrada</h3>";
    } else {
        $datos['objPersona'] = $personaEncontrada;
        $exito = $abmAuto->modificar($datos);
    }

    if ($exito) {
        $autoEncontrado = $abmAuto->buscar($datos);
        echo "<h3>Cambio de dueño realizado correctamente</h3>";
        echo "<table class='table'>";
        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<th scope='col'>Patente</th>";
        echo "<th scope='col'>Marca</th>";
        echo "<th scope='col'>Modelo</th>";
        echo "<th scope='col'>DNI Dueño</th>";
        echo "</tr>";
        echo "</thead>";

        foreach ($autoEncontrado as $vehiculo) {
            echo "<tr>
                        <th scope='row'>{$vehiculo->getPatente()}</th>
                        <td>{$vehiculo->getMarca()}</td>
                        <td>{$vehiculo->getModelo()}</td>
                        <td>{$vehiculo->getObjDuenio()}</td>
                    </tr>";
        }
        echo '</table>';
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";

<?php
$titulo = "TP4 - EJ7";
include_once "../../../estructura/cabecera.php";
?>

<div class="container mt-3">
    <?php
    $datos = data_submitted();
    $abmPersona = new AbmPersona();
    $abmAuto = new AbmAuto();
    $arrayPersona = [
        "nroDni" => $datos["dniDuenio"],
    ];
    $arrayAuto = [
        "patente" => $datos['patente']
    ];
    $personaEncontrada = $abmPersona->buscar($arrayPersona);
    $autoEncontrado = $abmAuto->buscar($arrayAuto);
    if (count($personaEncontrada) <= 0) {
        echo "<h3>El DNI ingresado no se encuentra registrado. <a href='../6'>Registrese aquí</a></h3>";
    } else if (count($autoEncontrado) > 0) {
        echo "<h3>La patente ingresada ya se encuentra registrada</h3>";
    } else {
        $datos['objPersona'] = $personaEncontrada;
        $exito = $abmAuto->alta($datos);
        if ($exito) {
            $resultadoBusqueda = $abmAuto->buscar(null);
            echo "<h3>Vehículo cargado correctamente</h3>";
            echo "<table class='table'>";
            echo "<thead class='table-dark'>";
            echo "<tr>";
            echo "<th scope='col'>Patente</th>";
            echo "<th scope='col'>Marca</th>";
            echo "<th scope='col'>Modelo</th>";
            echo "<th scope='col'>DNI dueño</th>";
            echo "</tr>";
            echo "</thead>";
            foreach ($resultadoBusqueda as $vehiculo) {
                echo "<tr>
                        <th scope='row'>{$vehiculo->getPatente()}</th>
                        <td>{$vehiculo->getMarca()}</td>
                        <td>{$vehiculo->getModelo()}</td>
                        <td>{$vehiculo->getObjDuenio()}</td>
                    </tr>";
            }
            echo '</table>';
        }
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";
?>
<?php
$titulo = "TP4 - EJ6";
include_once "../../../estructura/cabecera.php";

$control = new AbmPersona();
?>

<div class="container mt-3">
    <?php
$exito = $control->alta($_POST);
if ($exito) {
    $resultadoBusqueda = $control->buscar(null);
    echo "<h3>Persona cargada correctamente</h3>";
    echo "<table class='table mt-3'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<th scope='col'>DNI</th>";
    echo "<th scope='col'>Apellido</th>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th scope='col'>Fecha Nacimiento</th>";
    echo "<th scope='col'>Teléfono</th>";
    echo "<th scope='col'>Domicilio</th>";
    echo "</tr>";
    echo "</thead>";
    foreach ($resultadoBusqueda as $persona) {
        echo "<tr>
                    <th scope='row'>{$persona->getNroDni()}</th>
                    <td>{$persona->getApellido()}</td>
                    <td>{$persona->getNombre()}</td>
                    <td>{$persona->getFechaNac()}</td>
                    <td>{$persona->getTelefono()}</td>
                    <td>{$persona->getDomicilio()}</td>
                </tr>";
    }
    echo '</table>';
} else {
    echo "<h3>Error al cargar la persona</h3>";
}
?>
</div>

<?php
include_once "../../../estructura/pie.php";
?>
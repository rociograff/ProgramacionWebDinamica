<?php
$titulo = "TP3 - EJ3";
include_once '../../../estructura/cabecera.php';
?>

<div class="container mt-3">

<?php
$obj = new AbmPersona();
$lista = $obj->buscar(null);

if (count($lista) <= 0) {
    echo '<h3>No hay autos cargados</h3>';
} else {
    echo "<table class='table'>";
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
    foreach ($lista as $persona) {
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
}
?>

<form id="tp4ej5" name="tp4ej5" method="post" action="autosPersona.php" data-toggle="validator">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input class="form-control" id="nroDni" name="nroDni" type="text" placeholder="DNI" required>
                <label for="patente">Ingrese un DNI</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Listar">Listar</button>
            </div>
        </div>
    </form>

</div>

<?php
include_once '../../../estructura/pie.php';
?>
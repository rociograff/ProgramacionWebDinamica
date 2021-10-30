<?php
$titulo = "TP4 - EJ9";
include_once "../../../estructura/cabecera.php";

$datos = data_submitted();
$dni = $datos["nroDni"];
?>

<div class="container">
    <?php
    $datos = data_submitted();

    $abmPersona = new AbmPersona();
    $arrayPersona = [
        "nroDni" => $datos["nroDni"]
    ];

    $personaEncontrada = $abmPersona->buscar($arrayPersona);
    $apellido = $personaEncontrada[0]->getApellido();
    $nombre = $personaEncontrada[0]->getNombre();
    $fechaNac = $personaEncontrada[0]->getFechaNac();
    $domicilio = $personaEncontrada[0]->getDomicilio();
    $telefono = $personaEncontrada[0]->getTelefono();

    if (count($personaEncontrada) <= 0) {
        echo "<h3>El DNI ingresado no se encuentra registrado</h3>";
    } else {
        echo "<form id='tp4ej9action' name='tp4ej9action' method='post' action='actualizarDatosPersona.php'>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
            <h3>DNI: $dni</h3>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='nroDni' name='nroDni' type='hidden' value='$dni'>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='apellido' name='apellido' type='text' value='$apellido' required>
                <label for='apellido'>Ingrese su apellido</label>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='nombre' name='nombre' type='text' value='$nombre' required>
                <label for='nombre'>Ingrese su nombre</label>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='fechaNac' name='fechaNac' type='date' value='$fechaNac' required>
                <label for='fechaNac'>Ingrese su fecha de nacimiento</label>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='telefono' name='telefono' type='text' value='$telefono' required>
                <label for='telefono'>Ingrese su teléfono</label>
            </div>
        </div>
        <div class='col-md-4'>
            <div class='form-floating mb-3'>
                <input class='form-control' id='domicilio' name='domicilio' type='text' value='$domicilio' required>
                <label for='domicilio'>Ingrese su domicilio</label>
            </div>
        </div>
        <div class='col-md-4 mb-3'>
            <div class='d-grid'>
                <button class='btn btn-primary' type='submit'>Enviar</button>
            </div>
        </div>
    </form>";
    }
    ?>
</div>

<?php
include_once "../../../estructura/pie.php";

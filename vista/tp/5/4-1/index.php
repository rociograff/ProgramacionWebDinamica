<?php
$titulo = "TP5 - EJ4";
include_once '../../../estructura/cabecera.php';

$abmUsuario = new AbmUsuario();
$lista = $abmUsuario->buscar(null);

if (isset($_GET['message'])) {
    print '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
}
?>

<div class="container mt-3 d-flex flex-column min-vh-100">
    <table class='table'>
        <thead class='table-dark'>
            <tr>
                <th scope='col' class='text-center'>ID</th>
                <th scope='col' class='text-center'>Nombre</th>
                <th scope='col' class='text-center'>Contraseña</th>
                <th scope='col' class='text-center'>Email</th>
                <th scope='col' class='text-center'>Deshabilitado</th>
                <th scope='col'></th>
                <th scope='col'></th>
            </tr>
        </thead>

        <?php
if (count($lista) > 0) {
    foreach ($lista as $var) {
        $id = $var->getIdUsuario();
        echo "<tr>
            <td class='text-center'>$id</td>
            <td class='text-center'>{$var->getUsuarioNombre()}</td>
            <td class='text-center'>{$var->getUsuarioPassword()}</td>
            <td class='text-center'>{$var->getUsuarioEmail()}</td>";
        if ($var->getUsuarioDeshabilitado()) {
            echo "<td class='text-center'><i class='fas fa-check-circle'></i></td>";
        } else {
            echo "<td class='text-center'><i class='fas fa-times-circle'></i></td>";
        }

        echo "<form method='post' action='actualizarUsuario.php'>
        <td class='text-center'>
        <input name='id_usuario' id='id_usuario' type='hidden' value='$id'><button class='btn btn-warning btn-sm' type='submit'><i class='fas fa-user-edit'></i></button></td></form>
        <form method='post' action='eliminarUsuario.php'>
        <td class='text-center'>
        <input name='id_usuario' id='id_usuario' type='hidden' value='$id'><button class='btn btn-warning btn-sm' type='submit'>";

        if ($var->getUsuarioDeshabilitado()) {
            echo "<i class='fas fa-toggle-on'></i>";
        } else {
            echo "<i class='fas fa-toggle-off'></i>";
        }
        echo "</button></td></form></tr>";
    }
}
?>
    </table>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
<?php
include_once '../../../../configuracion.php';

$sesion = new Session();

$usuario = data_submitted();

$sesion->iniciar($usuario['username'], $usuario['password']);
if ($sesion->validar()) {
    header('Location: paginaSegura.php');
} else {
    $message = "Error en inicio de sesión";
    header('Location: index.php?message=' . urlencode($message));
}

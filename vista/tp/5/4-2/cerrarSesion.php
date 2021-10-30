<?php
include_once '../../../../configuracion.php';

$sesion = new Session();
$sesion->cerrar();
$message = "Sesión cerrada";
header('Location: index.php?message=' . urlencode($message));

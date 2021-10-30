<?php
include_once "../../../../configuracion.php";

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

$usuarioBuscado = ['id_usuario' => $datos['id_usuario']];

$listaUsuario = $abmUsuario->buscar($usuarioBuscado);
$objUsuario = $listaUsuario[0];

$datos['usuario_deshabilitado'] = $objUsuario->getUsuarioDeshabilitado();

$abmUsuario->modificar($datos);

header('Location: index.php');

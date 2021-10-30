<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap/boostrapValidator.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Cabecera redirect index php htdocs -->
    <title><?php echo $titulo; ?></title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../../home/home2/home3/index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trabajo Práctico 1</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../tp/1/1">Ejercicio 1</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/2">Ejercicio 2</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/3">Ejercicio 3</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/4">Ejercicio 4</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/5">Ejercicio 5</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/6">Ejercicio 6</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/7">Ejercicio 7</a></li>
                                <li><a class="dropdown-item" href="../../../tp/1/8">Ejercicio 8</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trabajo Práctico 2</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../tp/2/3">Ejercicio 3</a></li>
                                <li><a class="dropdown-item" href="../../../tp/2/4">Ejercicio 4</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trabajo Práctico 3</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../tp/3/1">Ejercicio 1</a></li>
                                <li><a class="dropdown-item" href="../../../tp/3/2">Ejercicio 2</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trabajo Práctico 4</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../tp/4/3">Ejercicio 3</a></li>
                                <li><a class="dropdown-item" href="../../../tp/4/4">Ejercicio 4</a></li>
                                <li><a class="dropdown-item" href="../../../tp/4/5">Ejercicio 5</a></li>
                                <li><a class="dropdown-item" href="../../../tp/4/6">Ejercicio 6</a></li>
                                <li><a class="dropdown-item" href="../../../tp/4/7">Ejercicio 7</a></li>
                                <li><a class="dropdown-item" href="../../../tp/4/8">Ejercicio 8</a></li>
                                <li><a class="dropdown-item" href="../../../tp/4/9">Ejercicio 9</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Trabajo Práctico 5</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../../../tp/5/4-1">Ejercicio 4.1</a></li>
                                <li><a class="dropdown-item" href="../../../tp/5/4-2">Ejercicio 4.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main role="main">
        <?php
include_once '../../../../configuracion.php';
?>
        </main>
    </header>
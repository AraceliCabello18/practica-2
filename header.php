<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Esta libreria es google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <!--Esta libreria de iconos-->
    <link rel="stylesheet" href="fontawesome5.15.3/css/all.css">
    <!--Estilos-->
    <link rel="stylesheet" href="style.css">
    <title>Manual MSQLi</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <section style="font-family: 'Shadows Into Light', cursive;">
                    <!-- Navigation -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
                        <div class="container">
                            <a class="navbar-brand" href="index1.php">Sistemas web</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index1.php">Inicio
                                            <span class="fas fa-laptop-house"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="conexion.php">
                                        <span class="fas fa-link"></span>Conectar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ver.php">
                                        <span class="far fa-eye"></span>Mostrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ejecutar.php">
                                        <span class="fas fa-running">Ejecutar Query</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="insertar.php">
                                        <span class="far fa-check-square"></span>Insertar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Actualisar.php">
                                        <span class="fas fa-pen-nib"></span>Actualisar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="eliminar.php">
                                        <span class="fas fa-trash-alt"></span>Eliminar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </section>
            </div>
        </div>
    </div>
</body>
<?php include "footer.php";?>
</html>
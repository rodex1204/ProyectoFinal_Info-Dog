<?php
session_start();

if(!isset($_SESSION['user_id'])){
header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="public/styles.css">
        <title>Info-Dog</title>
    </head>
    <body>
        <nav id="nav" class="navbar navbar-expand-lg bg-dark-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img
                        src="./public/image/logo.png" alt="logo" width="120px"></a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ejercicio.php">Ejercitate
                                con tu perro</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Saber más
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="./etapas.php">Etapas de vida</a></li>
                                <li><a class="dropdown-item"
                                        href="./alimentosdan.php">Alimentos
                                        dañinos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item"
                                        href="./enfermedades.php">Enfermedades</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./alimentacion.php">Alimentación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./vacunas.php">Vacunas</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning"><a
                                style="text-decoration: none;"
                                class="text-reset"
                                href="./logout.php">Cerrar sesión</a></button>
                    </div>
                </ul>
            </div>
        </nav>
        <div id="etapas">
            <div class="row text-center px-5" style="background-color: #F4D066;">
                <h1 class="p-4">ETAPAS DE VIDA</h1>
                <div class="col-md-4 px-3 py-4 mb-4">
                    <div class="card text-center p-3 shadow"
                        style="background-color: #F8A41A;">
                        <h2>Cachorro</h2>
                        <div class="overflow">
                            <img src="./public/image/t1.jpg" alt
                                class="card-img-top p-4">
                        </div>
                        <div class="card-body">
                            <p>La etapa de cachorro abarca el período de
                                crecimiento rápido que dura desde seis meses
                                para los perros pequeños hasta un año para los
                                más grandes.
                                <br>
                                <br>
                                La infancia es un período crucial para el
                                desarrollo del comportamiento y la socialización
                                de tu perro. La conducta inapropiada puede
                                corregirse con mayor facilidad durante esta
                                etapa de la vida. Pregúntale a tu veterinario
                                sobre cómo acostumbrar a tu perro a los exámenes
                                bucales, de los dientes, las orejas y las patas,
                                y cómo limpiar sus dientes.
                                <br>
                                <br>
                                También es muy importante que tu cachorro tenga
                                un calendario de vacunas y control de parásitos
                                desde el principio. Tu veterinario te aconsejará
                                sobre cuál es el plan adecuado para la situación
                                individual de tu cachorro.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-3 py-4 mb-4">
                    <div class="card text-center p-3 shadow"
                        style="background-color: #F8A41A;">
                        <h2>Adulto</h2>
                        <div class="overflow">
                            <img src="./public/image/t2.jpg" alt
                                class="card-img-top p-4">
                        </div>
                        <div class="card-body">
                            <p>¡No olvides que los perros pueden aprender a
                                todas las edades! Continúa entrenando y
                                socializando a tu perro - traerá alegría a
                                ambos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-3 py-4 mb-4">
                    <div class="card text-center p-3 shadow"
                        style="background-color: #F8A41A;">
                        <h2>Senior</h2>
                        <div class="overflow">
                            <img src="./public/image/t3.jpg" alt
                                class="card-img-top p-4">
                        </div>
                        <div class="card-body">
                            <p>Una vez que tu perro entre en esta etapa de la
                                vida, tendrás que prestar aún más atención a su
                                salud.
                                <br>
                                <br>
                                Las pruebas rutinarias de laboratorio son
                                particularmente importantes para los perros
                                mayores, ya que permiten la detección temprana
                                de enfermedades. Muchas enfermedades y cambios
                                que afectan a los perros mayores pueden ser
                                manejados con mucho éxito, lo que conduce a una
                                buena calidad de vida y longevidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="bg-dark text-white py-3">
            <div class="container">
                <nav class="row">
                    <ul class="col-md-12 list-unstyled">
                        <li class="text-uppercase text-center">Síguenos en
                            nuestras Redes Sociales</li>
                        <div>
                            <li class="d-flex justify-content-between py-3">
                                <a href="https://www.facebook.com/?locale=es_LA"
                                    class="text-reset"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://twitter.com/?lang=es"
                                    class="text-reset"><i
                                        class="bi bi-twitter-x"></i></a>
                                <a href="https://www.instagram.com/"
                                    class="text-reset"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://www.pinterest.com.mx/"
                                    class="text-reset"><i
                                        class="bi bi-pinterest"></i></a>
                            </li>
                        </div>
                        <li class="text-center">Todos los derechos
                            reservados</li>
                        <li class="text-center">
                            <a href="#nav" class="text-reset">Volver a arriba</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
        <script src="./public/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="funciones.js"></script>
    </body>
</html>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
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
                                <li><a class="dropdown-item" href="./etapas.php">Etapas
                                        de vida</a></li>
                                <li><a class="dropdown-item"
                                        href="./alimentosdan.php">Alimentos
                                        dañinos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
        <div id="ejercicio">
            <div class="row px-5" style="background-color: #EED456;">
                <h1 class="p-4 text-center">EJERCICIOS CON TU PERRO</h1>
                <div class="col-md-12 px-3 py-3 mb-4 rounded-5 shadow"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3>1. Hacer una caminata</h3>
                        <div class="card-body">
                            <p>Esta es la manera más común, sencilla y fácil de
                                ejercitar a un animal. Además, dado que no
                                es una actividad de alta intensidad, puede
                                ajustarse a las necesidades de cada perro y a su
                                estado físico. Así, puede variarse el lugar, el
                                tiempo y la velocidad para cada caso.</p>
                        </div>
                    </div>
                    <div class="col-4 mx-auto">
                        <img src="./public/image/e1.jpg"
                            class="card-img-top p-4">
                    </div>
                </div>
                <div class="col-md-12 px-3 py-3 mb-4 rounded-5 shadow"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3>2. Elaborar juegos de ingenio</h3>
                        <div class="card-body">
                            <p>¿Alguna vez has pensado en comprar golosinas para
                                perros y esconderlas en distintos puntos de, por
                                ejemplo, un parque o de la casa? Esto hará que
                                el perro haga uso de su olfato para tratar de
                                encontrar todos los premios y, así, se mueva, se
                                ejercite y se canse.
                                <br>
                                <br>
                                Además de desestresarse, tu perro logrará
                                fortalecer sus músculos y huesos.</p>
                        </div>
                    </div>
                    <div class="col-4 mx-auto">
                        <img width="30px" src="./public/image/e2.jpg"
                            class="card-img-top p-4">
                    </div>
                </div>
                <div class="col-md-12 px-3 py-3 mb-4 rounded-5 shadow"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3>3. Visitar el parque para perros</h3>
                        <div class="card-body">
                            <p>En algunas localidades hay parques especiales
                                para perros que presentan diversos elementos
                                para ejercitarse. Si tú tienes la oportunidad de
                                acudir a uno, no dudes en hacerlo.</p>
                        </div>
                    </div>
                    <div class="col-4 mx-auto">
                        <img width="30px" src="./public/image/e3.jpg"
                            class="card-img-top p-4">
                    </div>
                </div>
                <div class="col-md-12 px-3 py-3 mb-4 rounded-5 shadow"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3>4. Trotar o correr</h3>
                        <div class="card-body">
                            <p>Este ejercicio no deja de ser el mismo que el
                                comentado anteriormente en referencia a la
                                caminata, pero con un nivel de exigencia
                                superior. Se trata, en esencia, de aumentar la
                                velocidad a la que se realiza el desplazamiento.</p>
                        </div>
                    </div>
                    <div class="col-4 mx-auto">
                        <img width="30px" src="./public/image/e4.jpg"
                            class="card-img-top p-4">
                    </div>
                </div>
                <div class="col-md-12 px-3 py-3 mb-5 rounded-5 shadow"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3>5. Jugar a atrapar</h3>
                        <div class="card-body">
                            <p>Ya sea una pelota, un frisbee o su juguete
                                favorito, este clásico nunca falla.</p>
                        </div>
                    </div>
                    <div class="col-4 mx-auto">
                        <img width="30px" src="./public/image/e5.jpeg"
                            class="card-img-top p-4">
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
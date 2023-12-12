<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
}

if (isset($_SESSION['mensaje'])) {
    echo '<script>alert("' . $_SESSION['mensaje'] . '");</script>';

    unset($_SESSION['mensaje']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/style.css">
    <title>Info-Dog</title>
</head>

<body>
    <nav id="nav" class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="indexor.php"><img src="./public/image/logo.png" alt="logo" width="120px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="indexor.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ejercicio.php">Ejercitate
                            con tu perro</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Saber más
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./etapas.php">Etapas de vida</a></li>
                            <li><a class="dropdown-item" href="./alimentosdan.php">Alimentos
                                    dañinos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./enfermedades.php">Enfermedades</a></li>
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
                <li class="nav-link bg-info rounded-4 shadow mx-3 text-center">
                    <?php
                    include_once("./include/dbconn.php");
                    $database = new Connection();
                    $db = $database->open();
                    $sql = 'SELECT nombre FROM usuarios WHERE id = :id';
                    $stmt = $db->prepare($sql);
                    $stmt->bindParam(':id', $_SESSION['user_id']);
                    $stmt->execute();

                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    echo '¡Hola!, ' . $user['nombre'];

                    $database->close();
                    ?>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#datosc">Datos curiosos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Habilidades">Habilidades</a>
                </li>
                <div class="d-grid">
                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" class="text-reset"
                            href="./logout.php">Cerrar sesión</a></button>
                </div>
            </ul>
        </div>
    </nav>
    <main class="py-0">
        <header>
            <div class="col-md-12">
                <div class="bg-dark text-light p-5 bg-secondary bg-gradient">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <h1>Todo lo que necesitas para tener a tu amigo feliz, ¡Está aquí!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </main>
    <main class="py-0">
        <header>
            <div class="col-md-12">
                <div class="bg-dark text-light fondo">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <h1>El perro es el único animal que te ama más a
                                ti, que a sí mismo...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </main>
    <div id="datosc">
        <div class="row text-center px-5" style="background-color: #F4D066;">
            <h1 class="p-4">DATOS CURIOSOS</h1>
            <div class="col-md-4 px-3 py-4 mb-4">
                <div class="card text-center p-3 shadow" style="background-color: #F8A41A;">
                    <h3>Tu perro es tán inteligente como un niño de dos años</h3>
                    <div class="overflow">
                        <img src="./public/image/dc1.jpg" alt class="card-img-top p-4">
                    </div>
                    <div class="card-body">
                        <p>¿Sabías que los perros comprenden aproximadamente
                            250 palabras o gestos? Muy similar a lo que le
                            ocurre a un niño de 2 años. Por eso, es tan
                            común que perros y niños pequeños se suelan
                            llevar tan bien…</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-3 py-4 mb-4">
                <div class="card text-center p-3 shadow" style="background-color: #F8A41A;">
                    <h3>Físicamente, un perro de un año equivale a un humano
                        de 15</h3>
                    <div class="overflow">
                        <img src="./public/image/dc2.jpg" alt class="card-img-top p-4">
                    </div>
                    <div class="card-body">
                        <p>Esto, lógicamente, también va a depender de cada
                            raza… Por lo general, los perros grandes
                            envejecen más rápido que los pequeños. Existen
                            algunas calculadoras que te ayudan a saber con
                            más exactitud la edad de tu perro.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 px-3 py-4 mb-4">
                <div class="card text-center p-3 shadow" style="background-color: #F8A41A;">
                    <h3>Algunos no ladran</h3>
                    <div class="overflow">
                        <img src="./public/image/dc3.jpg" alt class="card-img-top p-4">
                    </div>
                    <div class="card-body">
                        <p>En concreto, una raza originaria del este de
                            Basenji, muy empleado para la caza. Tiene la
                            peculiaridad de no ladrar, pero sí emite un
                            curioso sonido (parecido a un canto tirolés).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Habilidades">
        <div class="row text-center px-5" style="background-color: #EE9B2B;">
            <h1 class="p-4">HABILIDADES</h1>
            <div class="col-md-3 px-3 py-4 tarjeta mb-5 rounded">
                <div class="card text-center p-3 shadow" style="background-color: #EFB350;">
                    <div class="overflow">
                        <img src="./public/image/h1.jpg" alt class="card-img-top p-4">
                    </div>
                    <h4>Los perros sienten empatía</h4>
                </div>
            </div>
            <div class="col-md-3 px-3 py-4 tarjeta mb-5 rounded">
                <div class="card text-center p-3 shadow" style="background-color: #EFB350;">
                    <div class="overflow">
                        <img src="./public/image/h2.jpg" alt class="card-img-top p-4">
                    </div>
                    <h4>También hacen contacto visual</h4>
                </div>
            </div>
            <div class="col-md-3 px-3 py-4 tarjeta mb-5 rounded">
                <div class="card text-center p-3 shadow" style="background-color: #EFB350;">
                    <div class="overflow">
                        <img src="./public/image/h3.jpg" alt class="card-img-top p-4">
                    </div>
                    <h4>Ellos ven al humano como parte de su familia</h4>
                </div>
            </div>
            <div class="col-md-3 px-3 py-4 tarjeta mb-5 rounded">
                <div class="card text-center p-3 shadow" style="background-color: #EFB350;">
                    <div class="overflow">
                        <img src="./public/image/h4.jpg" alt class="card-img-top p-4">
                    </div>
                    <h4>Entienden gestos</h4>
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
                            <a href="https://www.facebook.com/?locale=es_LA" class="text-reset"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com/?lang=es" class="text-reset"><i
                                    class="bi bi-twitter-x"></i></a>
                            <a href="https://www.instagram.com/" class="text-reset"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.pinterest.com.mx/" class="text-reset"><i
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
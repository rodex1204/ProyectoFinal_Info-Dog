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
        <div id="alidan">
            <div class="row px-5" style="background-color: #EED456;">
                <h1 class="p-4 text-center">ENFERMEDADES</h1>
                <div class="col-md-8 px-3 py-3 mb-5 rounded-5 shadow mx-auto"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3 class="text-center">Tos de las perreras</h3>
                        <div class="card-body">
                            <p>Es una de la enfermedades de perros más comunes y
                                la mayoría de los canes podría contraerla alguna
                                vez en su vida. Es el equivalente a un resfriado
                                en los humanos. La tos de las perreras, es una
                                enfermedad contagiosa del tracto respiratorio
                                superior y se transmite por bacterias o virus.
                                Requiere una solución rápida con medicamento
                                especializado en vías respiratorias.
                            </p>
                            <h4>Síntomas:</h4>
                            <ol>
                                <li>Tu perro tose con frecuencia, e incuso
                                    sientes como si tuviera una ligera presión
                                    sobre la tráquea.</li>
                                <li>Bebe agua y notas que tiene algo de fiebre.</li>
                                <li>Sigue comiendo con normalidad (en algunos
                                    casos, si tiene dolor puede tener
                                    inapetencia).</li>
                                <li>Le moquea un poco la nariz y le lloran los
                                    ojos.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 px-3 py-3 mb-5 rounded-5 shadow mx-auto"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3 class="text-center">Diabetes mellitus</h3>
                        <div class="card-body">
                            <p>Es una enfermedad directamente relacionada con la
                                alimentación de tu perro. La diabetes es muy
                                común en perros al igual que lo es en humanos.
                                Un perro debe mantenerse en un peso saludable
                                comiendo pienso de alta calidad y evitar a toda
                                costa el consumo de alimentos dulces.
                            </p>
                            <h4>Síntomas:</h4>
                            <ol>
                                <li>Tu perro bebe grandes cantidades de agua.</li>
                                <li>Orina con mucha frecuencia.</li>
                                <li>Perdió peso de manera considerable a pesar
                                    que come mucho.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 px-3 py-3 mb-5 rounded-5 shadow mx-auto"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3 class="text-center">Insuficiencia renal</h3>
                        <div class="card-body">
                            <p>La insuficiencia renal crónica se presenta cuando
                                tu compañero peludo ha alcanzado cierta edad y
                                la función de sus riñones disminuye. Para poder
                                detectarla a tiempo, nuestras mascotas deben
                                tener monitoreo constante de su salud y así
                                evitar que aparezcan los primeros síntomas.
                            </p>
                            <h4>Síntomas:</h4>
                            <ol>
                                <li>Tu perro tiene mal aliento.</li>
                                <li>Notas que aumenta su consumo de agua y de
                                    orina.</li>
                                <li>Duerme la mayor parte del tiempo y está
                                    desganado.</li>
                                <li>Pierde el apetito y baja de peso.</li>
                                <li>Hay presencia de vómitos.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 px-3 py-3 mb-5 rounded-5 shadow mx-auto"
                    style="border: solid black; background-color: #F8A41A;">
                    <div class="p-3 pb-0">
                        <h3 class="text-center">Parvovirus</h3>
                        <div class="card-body">
                            <p>El parvovirus, comúnmente llamado parvo, es una
                                enfermedad viral del intestino. Junto con el
                                moquillo o distemper, es una enfermedad muy
                                peligrosa y se presenta principalmente en un
                                cachorro que no tiene su cuadro de vacunación
                                completo.
                                <br>
                                <br>
                                Este padecimiento puede incluso poner en riesgo
                                la vida de tu mascota por lo que hay que estar
                                atentos a dar tratamiento desde los primeros
                                síntomas en caso de no tener el cuadro de
                                vacunación completo.
                            </p>
                            <h4>Síntomas:</h4>
                            <ol>
                                <li>Diarrea constante y vómito.</li>
                                <li>Presencia de sangre en las heces y temblores</li>
                                <li>Decaimiento y perdida del apetito</li>
                                <li>Deshidratación</li>
                            </ol>
                            <p>Entre otras más enfermedades... <a href="https://purina.com.mx/purina/perros/principales-enfermedades">Ver más</a></p>
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
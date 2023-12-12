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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/styles.css">
    <title>Info-Dog</title>
</head>

<body>
    <nav id="nav" class="navbar navbar-expand-lg bg-dark-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./public/image/logo.png" alt="logo" width="120px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ejercicio.php">Ejercitate con tu perro</a>
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
                <div class="d-grid">
                    <button type="submit" class="btn btn-warning"><a style="text-decoration: none;" class="text-reset"
                            href="./logout.php">Cerrar sesión</a></button>
                </div>
            </ul>
        </div>
    </nav>
    <div id="alidan">
        <div class="row px-5" style="background-color: #EED456;">
            <h1 class="p-4 text-center">ALIMENTOS DAÑINOS</h1>
            <div class="col-md-5 px-3 py-3 mb-5 rounded-5 shadow mx-auto" style="background-color: #F8A41A;">
                <div class="p-3 pb-0">
                    <h3 class="text-center">Uvas y pasas</h3>
                    <div class="card-body">
                        <p>Las uvas y pasas pueden resultar muy tóxicas para el perro, incluso en las cantidades más
                            pequeñas pueden provocar fallo renal. Todavía hoy se desconoce por qué las uvas resultan tan
                            perjudiciales para los perros, pero los estudios realizados evidencian que se debe a alguno
                            de sus componentes, aunque todavía no podamos identificar cual. El efecto toxico de las uvas
                            no es algo característico de una especie en particular de esta fruta, sino que se puede
                            observar en todas ellas, incluso si tienen o no semilla.
                            <br>
                            <br>
                            Por supuesto, resulta igual de peligroso dar a un perro pasas o alimentos que contengan uvas
                            y derivados.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 px-3 py-3 mb-5 rounded-5 shadow mx-auto" style="background-color: #F8A41A;">
                <div class="p-3 pb-0">
                    <h3 class="text-center">Chocolate</h3>
                    <div class="card-body">
                        <p>El chocolate es altamente tóxico para los perros independientemente de la cantidad o la
                            frecuencia con la que el animal lo consuma. Su toxicidad radica en la teobromina que
                            contiene el cacao, los perros no son capaces de metabolizar esta sustancia y se acumula en
                            su organismo. Aunque el perro sólo coma un poco de chocolate y de vez en cuando, con el paso
                            de los años la teobromina se acumula en su organismo y puede causar insuficiencia renal.
                            <br>
                            <br>
                            Puesto que todos los tipos de chocolates o alimentos con chocolate contienen cacao, no hay
                            ninguno que esté exento de contener teobromina. Los que más teobromina contienen son los
                            chocolates negros y más puros, tan sólo 25 gramos de chocolate negro pueden ser suficientes
                            para envenenar a un perro de unos 20 kilos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 px-3 py-3 mb-5 rounded-5 shadow mx-auto" style="background-color: #F8A41A;">
                <div class="p-3 pb-0">
                    <h3 class="text-center">Cebolla y Ajo</h3>
                    <div class="card-body">
                        <p>Tanto la cebolla como el ajo contienen compuestos azufrados que pueden llegar a destruir los
                            glóbulos rojos de la sangre en perros y gatos y por consiguiente, causar anemia. Estos
                            compuestos están presentes tanto si el alimento está crudo, cocinado o en polvo
                            (condimento).
                            <br>
                            <br>
                            La cebolla resulta algo más tóxica que el ajo, pero, en cualquier caso, la toxicidad de la
                            cebolla o el ajo para el perro dependerá de la dosis que ingiera y su tamaño. Para que tu
                            perro experimente problemas graves es necesario que ingiera una cantidad elevada de este
                            alimento, por ejemplo, si se come media cebolla o una cebolla entera de una vez, o varios
                            trozos de cebolla todos los días. Por otro lado, si tu perro come pequeñas dosis de vez en
                            cuando, no le va a pasar nada malo ni se va a intoxicar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 px-3 py-3 mb-5 rounded-5 shadow mx-auto" style="background-color: #F8A41A;">
                <div class="p-3 pb-0">
                    <h3 class="text-center">Alcohol</h3>
                    <div class="card-body">
                        <p>Por supuesto el alcohol es peligroso para los perros y puede causar daños graves ya que no lo
                            toleran. Debemos evitar también que nuestro perro consuma alimentos que contengan alcohol.
                            <br>
                            <br>
                            Si cree que su mascota ha podido intoxicarse por alcohol, esté atento a estos síntomas:
                            incapacidad para caminar correctamente, presión arterial baja, letargo, hinchazón, vómitos,
                            diarrea e incluso convulsiones.
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
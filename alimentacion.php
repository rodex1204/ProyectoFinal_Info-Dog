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
    <div class="container mt-5">
        <h2 class="text-center mb-4">Formulario de Alimentación</h2>

        <form method="post" action="alimento.php" id="formulario">
            <div class="mb-3">
                <label for="etapa" class="form-label">Etapa:</label>
                <select name="etapa" id="etapa" class="form-select">
                    <option value="Cachorro">Cachorro</option>
                    <option value="Adulto">Adulto</option>
                    <option value="Ancianos/Senior">Ancianos/Senior</option>
                </select>
            </div>

            <button type="button" class="btn btn-primary mb-4" name="consultar" id="consultar">Consultar</button>
        </form>

        <div class="mb-3">
            <br>
            <div id="resultadoAlimento"></div>
        </div>
        <div class="mb-3">
            <br>
            <div id="resultadoCantidad"></div>
        </div>

        <script>
            document.getElementById('consultar').addEventListener('click', function () {
                var etapa = document.getElementById('etapa').value;

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            // Intentar analizar la respuesta JSON
                            try {
                                var respuesta = JSON.parse(xhr.responseText);

                                // Verificar si hay un error en la respuesta
                                if (respuesta.error) {
                                    console.error(respuesta.error);
                                } else {
                                    // Mostrar los datos en la página
                                    document.getElementById('resultadoAlimento').textContent = 'Alimento: ' + respuesta.alimento;
                                    document.getElementById('resultadoCantidad').textContent = 'Cantidad: ' + respuesta.cantidad;
                                }
                            } catch (error) {
                                console.error('Error al analizar la respuesta JSON');
                            }
                        } else {
                            console.error('Error en la solicitud AJAX');
                        }
                    }
                };

                xhr.open('POST', './alimento.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('etapa=' + encodeURIComponent(etapa));
            });
        </script>
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
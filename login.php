<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <title>Login</title>
    <link rel="stylesheet" href="./public/styles.css">

    <style>
        body {
            background: #ecca8a;
            background: linear-gradient(to right, #e1a76e, #ecca8a);
        }

        .bg {
            background-image: url(./public/image/perro1.png);
            background-position: center center;
            background-size: cover;
        }
    </style>

</head>

<body>
    <div class="container w-75 bg-white mt-5 mb-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-start">

            </div>
            <div class="col bg-white p-5 rounded">
                <div class="text-center">
                    <img src="./public/image/logo.png" width="135px" alt>
                </div>
                <h2 class="fw-bold text-center py-4">Bienvenido</h2>
                <div class="text-center bg-warning rounded">
                </div>
                <h3 class="text-center py-2">Inicia Sesión</h3>

                <div class="text-center bg-warning rounded">
                    <?php
                    session_start();
                    if (isset($_SESSION['message'])) {
                        echo '<div class="mensaje">' . $_SESSION['message'] . '</div>';
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>

                <?php
                include("verifcorreo.php");
                ?>

                <!--LOGIN-->

                <form method="POST" action="verifcorreo.php">
                    <div class="mb-4 mt-4">
                        <label for="email" class="form-label">Correo
                            electrónico</label>
                        <input type="email" class="form-control" name="correo" id="correo">
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena">
                    </div>
                    <!--<div class="mb-4">
                            <input type="checkbox" name="connected"
                                class="form-check-input">
                            <label for="connected" class="form-check-label">Mantenerme
                                conectado</label>
                        </div>-->

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="iniciar">Iniciar
                            sesión</button>
                    </div>

                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="registro.php">Regístrate</a></span><br>
                    </div>
                    <div class="d-grid col-4 mx-auto">
                        <button type="submit" class="btn btn-warning bg-gradient"><a style="text-decoration: none;"
                                class="text-reset" href="./index.php">Volver al inicio</a></button>
                    </div>
                </form>

                <!--LOGIN CON REDES SOCIALES-->
                <!--<div class="container w-100 my-5">
                        <div class="row text-center">
                            <div class="col-12">Iniciar sesión</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button
                                    class="btn btn-outline-primary w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="./public/image/fb.png"
                                                width="32px" alt>
                                        </div>
                                        <div class="col-12 col-md-10 text-center">
                                            Facebook
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col">
                                <button
                                    class="btn btn-outline-danger w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img
                                                src="./public/image/google.png"
                                                width="32px" alt>
                                        </div>
                                        <div class="col-12 col-md-10 text-center">
                                            Google
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>-->
            </div>
        </div>
    </div>
    <script src="./public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
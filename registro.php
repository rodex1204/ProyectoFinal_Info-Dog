<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
        <title>Registro</title>
        <link rel="stylesheet" href="./public/styles.css">

        <style>
            body{
                background: #ecca8a;
                background: linear-gradient(to right, #e1a76e, #ecca8a);
            }
            .bg{
                background-image: url(./public/image/perro.jpg);
                background-position: center center;
                background-size: cover;
            }
        </style>

    </head>
    <body>
        <div class="container w-75 bg-white mt-5 mb-5 rounded shadow">
            <div class="row align-items-stretch">
                <div
                    class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-start">

                </div>
                <div class="col bg-white p-5 rounded">
                    <div class="text-center">
                        <img src="./public/image/logo.png" width="135px" alt>
                    </div>
                    <h2 class="fw-bold text-center py-5">Regístrate</h2>
                    <div class="text-center bg-warning rounded">
                        <?php
                        session_start();
                        if (isset($_SESSION['message'])) {
                        echo '<div class="mensaje">' . $_SESSION['message'] . '</div>';
                        unset($_SESSION['message']);
                        }
                        ?>
                    </div>
                    <!--LOGIN-->

                    <form action="./regis.php" method="POST">
                        <div class="mb-4 mt-4">
                            <input type="text" class="form-control"
                                name="nombre" id="nombre"
                                placeholder="Nombre(s)">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control"
                                name="apellidop" id="apellidop"
                                placeholder="Apellido paterno">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control"
                                name="apellidom" id="apellidom"
                                placeholder="Apellido materno">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control"
                                name="correo" id="correo"
                                placeholder="Correo electrónico">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control"
                                name="contrasena" id="contrasena"
                                placeholder="Contraseña">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"
                                name="registro">Registrarse</button>
                        </div>

                        <div class="my-3">
                            <span>¿Ya tienes una cuenta? <a href="login.php">Iniciar
                                    sesión</a></span><br>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="./public/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
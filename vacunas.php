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

    <div style="background-color: #EED456;">
        <div class="row col-md-12">
            <div class="row mx-auto py-4">
                <h3 class="text-center mb-4">VACUNAS PARA TUS PERROS:</h3>
                <div class="text-center bg-primary rounded col-5 mx-auto mb-4">
                    <?php
                    session_start();
                    if (isset($_SESSION['message'])) {
                        echo '<div class="mensaje">' . $_SESSION['message'] . '</div>';
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>
                <form action="add.php" method="POST" class="col-md-8 mx-auto">
                    <table class="table table-bordered">
                        <thead class="text-center border">
                            <tr>
                                <th class="py-2">Nombre de la vacuna</th>
                                <th class="py-2">Enfermedad que combate</th>
                                <th class="py-2">Etapa de aplicación</th>
                                <th class="py-2">Acción</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2">
                                    <input type="text" id="nombre" name="nombre" class="form-control" required
                                        autofocus>
                                </td>
                                <td class="py-2">
                                    <input type="text" id="enfermedad" name="enfermedad" class="form-control" required
                                        autofocus>
                                </td>
                                <td class="py-2">
                                    <input type="text" id="etapa" name="etapa" class="form-control" required autofocus>
                                </td>
                                <td class="py-2">
                                    <div class="col-md-12 text-center">
                                        <a href="index.php" class="btn btn-secondary">Regresar</a>
                                        <button type="submit" class="btn btn-primary" name="agregar">Ingresar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="row  col-10 mx-auto py-4">
            <table class="table table-bordered col-md-8 mx-auto">
                <thead>
                    <tr>
                        <th class="py-2 text-center">Nombre de la vacuna</th>
                        <th class="py-2 text-center">Enfermedad que combate</th>
                        <th class="py-2 text-center">Etapa de aplicación</th>
                        <th class="py-2 text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once("./include/dbconn.php");
                    $database = new Connection();
                    $db = $database->open();
                    try {
                        $sql = "SELECT * FROM vacunas";
                        foreach ($db->query($sql) as $row) {
                            ?>
                            <tr>
                                <td class="py-2 p-3 text-center">
                                    <?php echo $row['nombre'] ?>
                                </td>
                                <td class="py-2 p-3 text-center">
                                    <?php echo $row['enfermedad'] ?>
                                </td>
                                <td class="py-2 p-3 text-center">
                                    <?php echo $row['etapa'] ?>
                                </td>
                                <td class="py-2 p-3 text-center">
                                    <a class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editModal_<?php echo $row['id'] ?>">Editar</a>

                                    <div class="modal fade" id="editModal_<?php echo $row['id'] ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar nombre y etapa de
                                                        aplicación</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="edit.php?id=<?php echo $row['id'] ?>">
                                                        <div class="row form-group py-2">
                                                            <div class="col-sm-2">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">Nombre: </label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="nombre"
                                                                    value="<?php echo $row['nombre'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group py-2">
                                                            <div class="col-sm-2">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">Enfermedad que
                                                                    combate: </label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="enfermedad"
                                                                    value="<?php echo $row['enfermedad'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row form-group py-2">
                                                            <div class="col-sm-2">
                                                                <label class="control-label"
                                                                    style="position: relative; top: 7px;">Etapa de
                                                                    aplicación: </label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="etapa"
                                                                    value="<?php echo $row['etapa'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal"><a style="text-decoration: none;"
                                                                    class="text-reset" href="vacunas.php">Cerrar</a></button>
                                                            <button type="submit" name="editar"
                                                                class="btn btn-primary">Guardar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#borrarModal_<?php echo $row['id'] ?>">Eliminar</a>

                                    <div class="modal fade" id="borrarModal_<?php echo $row['id'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar vacuna</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="delete.php?id=<?php echo $row['id'] ?>">
                                                        <div class="row form-group">
                                                            <h2 class="text-center">
                                                                <?php echo $row['nombre'] ?>
                                                            </h2>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal"><a style="text-decoration: none;"
                                                                    class="text-reset" href="vacunas.php">Cerrar</a></button>
                                                            <button type="submit" name="eliminar" class="btn btn-primary"
                                                                id="btn-eliminar">Eliminar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    } catch (PDOException $e) {
                        echo "Error en la conexión" . $e->getMessage();
                    }
                    $database->close();
                    ?>
                </tbody>
            </table>
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
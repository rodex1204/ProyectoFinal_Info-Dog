<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: indexor.php');
}

include_once('./include/dbconn.php');

try {
    $database = new Connection();
    $bd = $database->open();

    if (isset($_POST['iniciar'])) {

        if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
            $stmt = $bd->prepare('SELECT id, correo, contrasena FROM usuarios WHERE correo = :correo');
            $stmt->bindParam(':correo', $_POST['correo']);
            $stmt->execute();

            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($results && password_verify($_POST['contrasena'], $results['contrasena'])) {
                $_SESSION['user_id'] = $results['id'];
                $_SESSION['message'] = 'Haz iniciado sesión correctamente';
                header('Location: indexor.php');
                exit(); // Importante: detener la ejecución después de redireccionar
            } else {
                // Usuario o contraseña incorrectos
                $_SESSION['message'] = 'Usuario o contraseña incorrectos';
                header('Location: login.php');
                exit();
            }
        } else {
            // Campos de formulario no llenados
            $_SESSION['message'] = 'Llene completamente el formulario';
            header('Location: login.php');
            exit();
        }
    }
} catch (PDOException $e) {
    // Manejar errores de base de datos
    $_SESSION['message'] = 'Error al conectar a la base de datos: ' . $e->getMessage();
} finally {
    $database->close();
}
?>
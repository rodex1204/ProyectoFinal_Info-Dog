<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: indexor.php');
}

include_once('./include/dbconn.php');

if (isset($_POST['registro'])) {
    if (empty($_POST['nombre']) || empty($_POST['apellidop']) || empty($_POST['apellidop']) || empty($_POST['correo']) || empty($_POST['contrasena'])) {
        $_SESSION['message'] = 'Por favor, complete todos los campos obligatorios.';
        header('Location: registro.php');
        exit();
    }

    $database = new Connection();
    $bd = $database->open();
    try {
        // Verificar si el correo ya está registrado
        $stmt_check_email = $bd->prepare("SELECT correo FROM usuarios WHERE correo = :correo");
        $stmt_check_email->bindParam(':correo', $_POST['correo']);
        $stmt_check_email->execute();

        if ($stmt_check_email->rowCount() > 0) {
            $_SESSION['message'] = 'Este correo ya ha sido registrado.';
            header('Location: registro.php');
            exit();
        }
        $contrasena_hash = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

        $stmt = $bd->prepare("INSERT INTO usuarios (nombre, apellidop, apellidom, correo, contrasena) 
        VALUES (:nombre, :apellidop, :apellidom, :correo, :contrasena)");

        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellidop', $_POST['apellidop']);
        $stmt->bindParam(':apellidom', $_POST['apellidom']);
        $stmt->bindParam(':correo', $_POST['correo']);
        $stmt->bindParam(':contrasena', $contrasena_hash);

        $_SESSION['message'] = $stmt->execute() ? 'Registro guardado correctamente' : 'Algo salió mal, el registro no se realizó correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = 'Error al ejecutar la consulta: ' . $e->getMessage();
    }
    $database->close();

} else {
    $_SESSION['message'] = 'Llene completamente el formulario';
}
header('Location: login.php');
exit();
?>

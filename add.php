<?php
session_start();
include_once('./include/dbconn.php');

if (isset($_POST['agregar'])) {
    $database = new Connection();
    $bd = $database->open();
    try {

        $stmt = $bd->prepare("INSERT INTO vacunas (nombre, enfermedad, etapa) VALUES (:nombre, :enfermedad, :etapa)");
        $stmt->bindParam(":nombre", $_POST["nombre"]);
        $stmt->bindParam(":enfermedad", $_POST["enfermedad"]);
        $stmt->bindParam(":etapa", $_POST["etapa"]);
        $_SESSION['message'] = $stmt->execute() ? 'Registro guardado correctamente' : 'Algo salió mal, el registro no se guradó correctamente';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    $database->close();

} else {
    $_SESSION['message'] = 'Llene completamente el formulario';
}
header('Location: vacunas.php');
?>
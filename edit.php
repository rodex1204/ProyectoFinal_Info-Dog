<?php
session_start();
include_once("./include/dbconn.php");

if (isset($_POST["editar"])) {
    $database = new Connection();
    $db = $database->open();

    try {
        $id = $_GET["id"];
        $nombre = $_POST["nombre"];
        $enfermedad = $_POST["enfermedad"];
        $etapa = $_POST["etapa"];
        $sql = "UPDATE vacunas SET nombre = '$nombre', enfermedad = '$enfermedad', etapa = '$etapa'  WHERE id = '$id' ";
        //$sql = "UPDATE campeones SET apodo = '$apodo'  WHERE id = '$id' ";

        $_SESSION['message'] = ($db->exec($sql)) ? 'Vacuna actualizada correctamente' : 'No se pudo actualizar la vacuna';
    } catch (Exception $e) {
        $_SESSION['message'] = $e->getPrevious();
    }
    $database->close();
}else{
    $_SESSION['message'] = 'Completa correctamente el formulario';
}
header('location: vacunas.php');
?>
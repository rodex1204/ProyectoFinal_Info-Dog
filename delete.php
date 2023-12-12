<?php
    session_start();
    include_once('./include/dbconn.php');

    if(isset($_GET['id'])){
        $database = new Connection();
        $db = $database->open();

        try{
            $sql = "DELETE FROM vacunas WHERE id = ' ".$_GET['id']. " ' ";

            $_SESSION['message'] = ($db->exec($sql)) ?'Vacuna eliminada correctamente':'No se puede eliminar la vacuna, revisa los datos';
        }catch(Exception $e){
            $_SESSION['message'] = $e->getMessage();
    }
    $database->close();
    }else{
        $_SESSION['message'] = 'Completa el formulario';
    }

    header('location: vacunas.php');
?>
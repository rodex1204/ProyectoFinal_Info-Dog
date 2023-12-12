<?php
include_once("./include/dbconn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener la etapa seleccionada
    $etapa = $_POST['etapa'];

    // Conectar a la base de datos
    $database = new Connection();
    $db = $database->open();

    try {
        // Preparar la consulta
        $stmt = $db->prepare("SELECT alimento, cantidad FROM alimentacion WHERE etapa = :etapa");

        // Vincular el parámetro de etapa y ejecutar la consulta
        $stmt->bindParam(":etapa", $etapa);
        $stmt->execute();

        // Obtener los resultados
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontraron resultados
        if ($resultado) {
            // Devolver los resultados en formato JSON
            echo json_encode($resultado);
        } else {
            // Enviar un mensaje si no se encuentran resultados
            echo json_encode(["error" => "No se encontraron resultados para la etapa seleccionada."]);
        }
    } catch (PDOException $e) {
        // Enviar un mensaje de error en caso de problemas con la base de datos
        echo json_encode(["error" => "Error en la conexión: " . $e->getMessage()]);
    }

    // Cerrar la conexión
    $database->close();
} else {
    // Enviar un mensaje de error si la solicitud no es de tipo POST
    echo json_encode(["error" => "Método de solicitud no válido"]);
}
?>

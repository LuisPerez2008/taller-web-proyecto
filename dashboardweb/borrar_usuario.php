<?php
require("conexion.php"); // Asegúrate de tener una conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST["id_usuario"];

    // Realiza una consulta SQL para eliminar el usuario
    $sql = "DELETE FROM registro WHERE id_registro = $id_usuario";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado con éxito";
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}

$conn->close(); // Cierra la conexión a la base de datos
?>
    
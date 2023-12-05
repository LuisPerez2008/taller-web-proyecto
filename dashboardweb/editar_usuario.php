<?php
require("conexion.php"); // Asegúrate de tener una conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST["id_usuario"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $contrasena = $_POST["contrasena"];
    
    // Realiza una consulta SQL para actualizar los datos del usuario
    $sql = "UPDATE registro SET nombre = '$nombre', correo = '$email', celular = '$celular', password = '$contrasena' WHERE id_registro = $id_usuario";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario actualizado con éxito');</script>";
        echo "<script>setTimeout(function(){ window.location = document.referrer; }, 1000);</script>";
    } else {
        echo "Error al actualizar el usuario: " . $conn->error;
    }
}

$conn->close(); // Cierra la conexión a la base de datos
?>

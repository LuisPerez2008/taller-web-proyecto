<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "vans";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


?>
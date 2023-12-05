<?php
// Conexión a la base de datos (debes configurar tus propios datos de conexión)
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'vans');

    // Verifica la conexión a la base de datos
    if (!$conexion) {
      die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }
?>
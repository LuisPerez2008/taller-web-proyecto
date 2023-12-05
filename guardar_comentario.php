<?php
    require("conexion.php");

    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $comentario=$_POST["comentario"];

    $sql = "INSERT INTO `guardarcomentario`(`nombre`, `email`, `comentario`, `fecha`) VALUES 
    ('$nombre', '$correo', '$comentario', CURDATE())";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $sql)) {
        // Inserción exitosa, redirige al usuario a una página de confirmación o inicio de sesión
        echo "<script>
                  alert('Registro exitoso');
                  window.location.href = 'blog.php'; // Cambia 'buttons.php' al nombre de tu formulario de inicio de sesión
                  </script>";
      } else {
        // Error en la inserción, muestra un mensaje de error y redirige al usuario de nuevo al formulario de registro
        echo "Error al registrarse. Por favor, intenta nuevamente más tarde.";
        header("Location: loginVans2.php"); // Cambia 'formulario_registro.html' al nombre de tu formulario de registro
        exit();
      }
  
      // Cierra la conexión a la base de datos
      mysqli_close($conexion);
?>
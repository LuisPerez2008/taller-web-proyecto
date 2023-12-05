<?php
// Verifica si se ha enviado el formulario de registro
    require("conexion.php"); // Asegúrate de tener una conexión a la base de datos


  // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $contrasena = $_POST["contrasena"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO `adminlogin`(`nombre`, `apellido`, `correo`, `celular`, `password`)
    VALUES ('$nombre', '$apellido', '$correo', '$celular', '$contrasena')";
    
    // Ejecuta la consulta
    if (mysqli_query($conn, $sql)) {
      // Inserción exitosa, redirige al usuario a una página de confirmación o inicio de sesión
      echo "<script>
                alert('Registro exitoso');
                window.location.href = 'login.html'; // Cambia 'loginVans.php' al nombre de tu formulario de inicio de sesión
                </script>";
    } else {
      // Error en la inserción, muestra un mensaje de error y redirige al usuario de nuevo al formulario de registro
      echo "Error al registrarse. Por favor, intenta nuevamente más tarde.";
      header("Location: loginVans2.php"); // Cambia 'formulario_registro.html' al nombre de tu formulario de registro
      exit();
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conn);
?>
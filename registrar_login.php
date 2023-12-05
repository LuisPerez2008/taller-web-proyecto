<?php
// Verifica si se ha enviado el formulario de registro
if (isset($_POST["registroSubmit"])) {
  // Obtiene los datos del formulario
  $nombre = $_POST["nombre"];
  $celular = $_POST["celular"];
  $correo = $_POST["correo"];
  $password = $_POST["password"];


    require("conexion.php");

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO registro (nombre, celular, correo, password) VALUES ('$nombre', '$celular', '$correo', '$password')";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $sql)) {
      // Inserción exitosa, redirige al usuario a una página de confirmación o inicio de sesión
      echo "<script>
                alert('Registro exitoso');
                window.location.href = 'loginVans.php'; // Cambia 'loginVans.php' al nombre de tu formulario de inicio de sesión
                </script>";
    } else {
      // Error en la inserción, muestra un mensaje de error y redirige al usuario de nuevo al formulario de registro
      echo "Error al registrarse. Por favor, intenta nuevamente más tarde.";
      header("Location: loginVans2.php"); // Cambia 'formulario_registro.html' al nombre de tu formulario de registro
      exit();
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
} 

if (isset($_POST["loginSubmit"])) {
    // Obtener los datos del formulario
    $correo = $_POST["correo"];
    $password = $_POST["password"];
  
  
  
      require("conexion.php");
  
      // Consulta SQL para buscar el usuario en la base de datos
      $sql = "SELECT * FROM registro WHERE correo = '$correo'";
  
      // Ejecutar la consulta
      $resultado = mysqli_query($conexion, $sql);
  
      // Verificar si se encontró un usuario con ese correo
      if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        // Verificar la contraseña
        if ($password === $fila['password']) {
          // Contraseña válida, el usuario está autenticado
          // Puedes redirigir al usuario a su página de inicio o realizar otras acciones que desees
          header("Location: index.html"); // Cambia 'pagina_inicio.php' a la página de inicio que desees
          exit();
        } else {
          // Contraseña incorrecta, muestra un mensaje de error y redirige al usuario al formulario de inicio de sesión
          echo "<script>
                alert('Contraseña incorrecta. Por favor, intenta nuevamente.');
                window.location.href = 'loginVans.php'; // Cambia 'loginVans.php' al nombre de tu formulario de inicio de sesión
                </script>";
        }
      } else {
        // No se encontró un usuario con ese correo, muestra un mensaje de error y redirige al usuario al formulario de inicio de sesión
        echo "<script>
              alert('No se encontró una cuenta con ese correo. Por favor, regístrate.');
              window.location.href = 'loginVans.php'; // Cambia 'loginVans.php' al nombre de tu formulario de inicio de sesión
              </script>";
      }
  
      // Cierra la conexión a la base de datos
      mysqli_close($conexion);
    }
?>

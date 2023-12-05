<?php
// Asegúrate de tener la conexión a la base de datos (usando $conn según tu código anterior)
require("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Consulta para obtener el usuario con el correo dado
    $sql = "SELECT * FROM adminlogin WHERE correo = '$correo'";
    $result = $conn->query($sql);

    // Verificar si se encontró un usuario con ese correo
    if ($result && $result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        // Verificar la contraseña
        if ($password === $fila['password']) {
            // Contraseña válida, el usuario está autenticado
            // Puedes redirigir al usuario a su página de inicio o realizar otras acciones que desees
            header("Location: index.php"); // Cambia 'index.php' a la página de inicio que desees
            exit();
        } else {
            // Contraseña incorrecta, muestra un mensaje de error y redirige al usuario al formulario de inicio de sesión
            echo "<script>
                alert('Contraseña incorrecta. Por favor, intenta nuevamente.');
                window.location.href = 'login.html'; // Cambia 'login.html' al nombre de tu formulario de inicio de sesión
                </script>";
        }
    } else {
        // No se encontró un usuario con ese correo, muestra un mensaje de error y redirige al usuario al formulario de inicio de sesión
        echo "<script>
            alert('No se encontró una cuenta con ese correo. Por favor, regístrate.');
            window.location.href = 'login.html'; // Cambia 'login.html' al nombre de tu formulario de inicio de sesión
            </script>";
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>

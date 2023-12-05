const nombreInput = document.getElementById("nombreInput");
const celularInput = document.getElementById("celularInput");
const correoInput = document.getElementById("correoInput");
const passwordInput = document.getElementById("passwordInput");

nombreInput.addEventListener("input", function () {
    // Valida el campo de nombre y muestra un mensaje de error si es necesario.
    const nombre = nombreInput.value;
    if (!/^[A-Za-z ]*$/.test(nombre)) {
        document.getElementById("mensajeErrorNombre").textContent = "El nombre debe contener solo letras y espacios.";
    } else {
        document.getElementById("mensajeErrorNombre").textContent = "";
    }
});

celularInput.addEventListener("input", function () {
    // Valida el campo de celular y muestra un mensaje de error si es necesario.
    const celular = celularInput.value;
    // Puedes definir tus propias reglas de validación para el número de teléfono.
    if (!/^[1-9]{9}$/.test(celular)) {
        document.getElementById("mensajeErrorCelular").textContent = "Ingresa un número de celular válido (9 dígitos del 0 al 9).";
    } else {
        document.getElementById("mensajeErrorCelular").textContent = "";
    }
});

correoInput.addEventListener("input", function () {
    // Valida el campo de correo y muestra un mensaje de error si es necesario.
    const correo = correoInput.value;
    // Puedes utilizar una expresión regular para validar el formato del correo.
    if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/.test(correo)) {
        document.getElementById("mensajeErrorCorreo").textContent = "Ingresa un correo electrónico válido(que incluya el @ y el .com).";
    } else {
        document.getElementById("mensajeErrorCorreo").textContent = "";
    }
});

passwordInput.addEventListener("input", function () {
    // Valida el campo de contraseña y muestra un mensaje de error si es necesario.
    const password = passwordInput.value;
    // Puedes definir tus propias reglas de validación para la contraseña.
    if (password.length < 8) {
        document.getElementById("mensajeErrorPassword").textContent = "La contraseña debe contener al menos 8 caracteres.";
    } else {
        document.getElementById("mensajeErrorPassword").textContent = "";
    }
});

document.getElementById("registroSubmit").addEventListener("click", function (event) {
    // Obtiene los valores de los campos
    const nombre = document.getElementById("nombreInput").value;
    const celular = document.getElementById("celularInput").value;
    const correo = document.getElementById("correoInput").value;
    const password = document.getElementById("passwordInput").value;

    // Verifica si algún campo está vacío
    if (nombre === "" || celular === "" || correo === "" || password === "") {
        // Evita que el formulario se envíe
        event.preventDefault();
        
        // Muestra un mensaje de error
        document.getElementById("mensajeErrorRegistro").textContent = "Por favor, rellena todos los campos.";
    } else {
        // Todos los campos están llenos, limpia el mensaje de error si estaba presente.
        document.getElementById("mensajeErrorRegistro").textContent = "";
    }
});

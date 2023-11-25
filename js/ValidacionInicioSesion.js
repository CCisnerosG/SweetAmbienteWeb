//FUNCIÓN PARA VALIDAR CORREO DE INICIO DE SESIÓN

function validateFormU() {
    var usuario = document.getElementById("usuario").value;
    if (!usuario.endsWith("@gmail.com")) {
        alert("El correo electrónico debe ser de dominio @gmail.com");
        return false;
    }
    return true;
}

//Validar que todos los campos estén llenos
function validateForm() {
    var usuarioInput = document.getElementById("usuario");
    var contrasenaInput = document.getElementById("contrasena");

    // Verificar si algún campo está vacío
    if (usuarioInput.value === "" || contrasenaInput.value === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario.");
        // Resaltar campos vacíos
        return false;
    }
    return true;
}



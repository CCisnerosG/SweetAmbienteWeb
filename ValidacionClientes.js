//----------------------------------FUNCIONES DE INSERTAR CLIENTES-------------------------------
//FUNCION PARA NUMERO DE TELEFONO
function validateNumeroTelefono() {
    var telefonoInput = document.getElementsByName("Numero_telefonico")[0];

    // Utiliza una expresión regular para verificar si solo contiene números
    if (!/^\d+$/.test(telefonoInput.value)) {
        alert("Por favor, ingrese solo números en el campo de número telefónico.");
        markInvalidFieldVM(telefonoInput);
        return false;
    }

    unmarkFieldVM(telefonoInput);
    return true;
}

//FUNCION PARA CORREO ELECTRONICO
function validateCorreo() {
    var correoInput = document.getElementsByName("Correo")[0];
    var correoValue = correoInput.value;

    // Utiliza una expresión regular para verificar si tiene el dominio @gmail.com
    if (!/^[a-zA-Z0-9._-]+@gmail\.com$/.test(correoValue)) {
        alert("Por favor, ingrese un correo electrónico válido con el dominio @gmail.com.");
        markInvalidFieldVM(correoInput);
        return false;
    }

    unmarkFieldVM(correoInput);
    return true;
}

//FUNCION PARA VALIDAR CAMPOS LLENOS 
function validarFormularioClientes() {
    var nombre = document.getElementsByName("Nombre")[0].value;
    var primerApellido = document.getElementsByName("Primer_apellido")[0].value;
    var segundoApellido = document.getElementsByName("Segundo_apellido")[0].value;
    var telefono = document.getElementsByName("Numero_telefonico")[0].value;
    var correo = document.getElementsByName("Correo")[0].value;
    var direccion = document.getElementsByName("Direccion")[0].value;
    var imagen = document.getElementsByName("Imagen")[0].value;

    if (nombre === "" || primerApellido === "" || segundoApellido === "" || telefono === "" || correo === "" || direccion === "" || imagen === "") {
        alert("Por favor, llena todos los campos para enviar el formulario para ingresar un cliente.");
        return false;
    }

    return true;
}



//----------------------------------FUNCIONES DE MODIFICAR CLIENTES-------------------------------

//FUNCION PARA VALIDAR CAMPOS LLENOS 
function validarFormularioModificarClientes() {
    var nombre = document.getElementsByName("Nombre")[0].value;
    var primerApellido = document.getElementsByName("Primer_apellido")[0].value;
    var segundoApellido = document.getElementsByName("Segundo_apellido")[0].value;
    var telefono = document.getElementsByName("Numero_telefonico")[0].value;
    var correo = document.getElementsByName("Correo")[0].value;
    var direccion = document.getElementsByName("Direccion")[0].value;
    var imagen = document.getElementsByName("Imagen")[0].value;

    if (nombre === "" || primerApellido === "" || segundoApellido === "" || telefono === "" || correo === "" || direccion === "" || imagen === "") {
        alert("Por favor, llena todos los campos para enviar el formulario para modificar un cliente.");
        return false;
    }

    // Puedes agregar más validaciones según tus requisitos.

    // También puedes llamar a las funciones de validación específicas, por ejemplo:
    if (!validateNumeroTelefonoModificarClientes() || !validateCorreoModificarClientes()) {
        return false;
    }

    return true;
}


//-----------------------------------------------------------------------------------------------
// Funciones auxiliares para cambiar el color de fondo de los campos inválidos
function markInvalidFieldVM(element) {
    element.style.backgroundColor = "#FFB6C1"; // Cambiar a un color que indique error
}

function unmarkFieldVM(element) {
    element.style.backgroundColor = ""; // Restaurar el color por defecto
}
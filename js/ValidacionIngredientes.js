//----------------------------------FUNCIONES DE INSERTAR INGREDIENTES----------------------------------------
// FUNCIÓN PARA EL CAMPO DE PRECIO
function validatePrecioIngrediente() {
    var precioInput = document.getElementsByName("Precio")[0];

    if (isNaN(precioInput.value) || precioInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Precio del ingrediente.");
        markInvalidFieldVM(precioInput);
        return false;
    }

    unmarkFieldVM(precioInput);
    return true;
}

// FUNCIÓN PARA VALIDAR QUE TODOS LOS CAMPOS ESTÉN LLENOS AL INSERTAR INGREDIENTES
function validateAllFieldsIngrediente() {
    var nombreInput = document.getElementsByName("Nombre")[0];
    var unidadMedidaInput = document.getElementsByName("Unidad_medida")[0];
    var precioInput = document.getElementsByName("Precio")[0];
    var idProveedor = document.getElementsByName("proveedor")[0]; 
    var ImagenInput = document.getElementsByName("Imagen")[0];

    // Verificar si algún campo está vacío
    if (nombreInput.value === "" || unidadMedidaInput.value === "" || precioInput.value === "" || idProveedor.value === "" || ImagenInput.value === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario.");
        return false;
    }

    // Validar campos de precio
    if (!validateNumberField(precioInput.value, "Precio")) {
        return false;
    }

    return true;
}



//----------------------------------FUNCIONES DE MODIFICAR INGREDIENTES----------------------------------------

// FUNCIÓN PARA EL CAMPO DE PRECIO
function validatePrecioIngredienteM() {
    var precioInput = document.getElementsByName("Precio")[0];

    if (isNaN(precioInput.value) || precioInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Precio del ingrediente.");
        markInvalidFieldVM(precioInput);
        return false;
    }

    unmarkFieldVM(precioInput);
    return true;
}

// FUNCIÓN PARA VALIDAR QUE TODOS LOS CAMPOS ESTÉN LLENOS AL INSERTAR INGREDIENTES
function validateAllFieldsIngredienteM() {
    var id_ingredienteInput = document.getElementsByName("id_ingrediente")[0];
    var nombreInput = document.getElementsByName("Nombre")[0];
    var unidadMedidaInput = document.getElementsByName("Unidad_medida")[0];
    var precioInput = document.getElementsByName("Precio")[0];
    var idProveedorInput = document.getElementsByName("id_proveedor")[0];
    var ImagenInput = document.getElementsByName("Imagen")[0];
    // Verificar si algún campo está vacío
    if (id_ingredienteInput.value === "" ||nombreInput.value === "" || unidadMedidaInput.value === "" || precioInput.value === "" || idProveedorInput.value === ""|| ImagenInput.value === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario.");
        return false;
    }

    // Validar campos de precio
    if (!validateNumberField(precioInput.value, "Precio")) {
        return false;
    }

    return true;
}

// Funciones auxiliares para cambiar el color de fondo de los campos inválidos
function markInvalidFieldVM(element) {
    element.style.backgroundColor = "#FFB6C1"; // Cambiar a un color que indique error
}

function unmarkFieldVM(element) {
    element.style.backgroundColor = ""; // Restaurar el color por defecto
}

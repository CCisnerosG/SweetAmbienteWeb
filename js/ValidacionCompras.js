//-------------------FUNCIONES DE INSERTAR COMPRAS-------------------------

//FUNCIÓN PARA EL CAMPO CANTIDAD

function validateCantidadCompra() {
    var cantidadInput = document.getElementsByName("Cantidad")[0];

    if (isNaN(cantidadInput.value) || cantidadInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Cantidad de la compra.");
        markInvalidFieldVM(cantidadInput);
        return false;
    }

    unmarkFieldVM(cantidadInput);
    return true;
}


//FUNCIÓN PARA EL CAMPO DE TOTAL

function validateTotalCompra() {
    var totalInput = document.getElementsByName("Total")[0];

    if (isNaN(totalInput.value) || totalInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Total de la compra.");
        markInvalidFieldVM(totalInput);
        return false;
    }

    unmarkFieldVM(totalInput);
    return true;
}

//FUNCIÓN PARA VALIDAR CAMPOS LLENOS
function validateFormI() {
    var fechaInput = document.getElementsByName("Fecha")[0];
    var proveedorInput = document.getElementsByName("Proveedor")[0];
    var productoInput = document.getElementsByName("Producto")[0];
    var cantidadInput = document.getElementsByName("Cantidad")[0];
    var totalInput = document.getElementsByName("Total")[0];

    // Verificar si algún campo está vacío
    if (fechaInput.value === "" || proveedorInput.value === "" || productoInput.value === "" || cantidadInput.value === "" || totalInput.value === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario.");
        return false;
    }

    // Validar campos de cantidad y total
    if (!validateNumberField(cantidadInput.value, "Cantidad") || !validateNumberField(totalInput.value, "Total")) {
        return false;
    }

    return true;
}

//-------------------FUNCIONES DE MODIFICAR COMPRAS-------------------------

// FUNCIÓN PARA VALIDAR CAMPO PRECIO EN MODIFICAR COMPRAS
function validatePrecioM() {
    var precioInput = document.getElementsByName("precio")[0];

    if (isNaN(precioInput.value) || precioInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Precio de la compra.");
        markInvalidFieldVM(precioInput);
        return false;
    }

    unmarkFieldVM(precioInput);
    return true;
}

// FUNCIÓN PARA VALIDAR CAMPO CANTIDAD EN MODIFICAR COMPRAS
function validateCantidadM() {
    var cantidadInput = document.getElementsByName("cantidad")[0];

    if (isNaN(cantidadInput.value) || cantidadInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Cantidad de la compra.");
        markInvalidFieldVM(cantidadInput);
        return false;
    }

    unmarkFieldVM(cantidadInput);
    return true;
}

// FUNCIÓN PARA VALIDAR CAMPO TOTAL EN MODIFICAR COMPRAS
function validateTotalM() {
    var totalInput = document.getElementsByName("total")[0];

    if (isNaN(totalInput.value) || totalInput.value === "") {
        alert("Por favor, ingrese solo números en el campo de Total de la compra.");
        markInvalidFieldVM(totalInput);
        return false;
    }

    unmarkFieldVM(totalInput);
    return true;
}

// FUNCIÓN PARA VALIDAR QUE TODOS LOS CAMPOS ESTÉN LLENOS EN MODIFICAR COMPRAS
function validateFormM() {
    var idCompraInput = document.getElementsByName("Compra")[0];
    var fechaCompraInput = document.getElementsByName("Fecha_compra")[0];
    var idProveedorInput = document.getElementsByName("Proveedor")[0];
    var idProductoInput = document.getElementsByName("Producto")[0];
    var cantidadInput = document.getElementsByName("cantidad")[0];
    var precioInput = document.getElementsByName("precio")[0];
    var totalInput = document.getElementsByName("total")[0];

    // Verificar si algún campo está vacío
    if (
        idCompraInput.value === "" ||
        fechaCompraInput.value === "" ||
        idProveedorInput.value === "" ||
        idProductoInput.value === "" ||
        cantidadInput.value === "" ||
        precioInput.value === "" ||
        totalInput.value === ""
    ) {
        alert("Por favor, complete todos los campos antes de enviar el formulario para modificar la compra deseada.");
        return false;
    }

    // Validar campos de cantidad, precio y total
    if (!validateNumberField(cantidadInput.value) || !validateNumberField(precioInput.value) || !validateNumberField(totalInput.value)) {
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




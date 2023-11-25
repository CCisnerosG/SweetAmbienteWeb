//-----------------------------------FUNCIONES DE INSERTAR VENTAS-----------------------------------

//FUNCIÓN PARA VALIDAR NÚMERO 
function isNumber(value) {
    return !isNaN(parseFloat(value)) && isFinite(value);
}

//FUNCIÓN PARA VALIDAR CAMPO CANTIDAD
function validateCantidadV() {
    var cantidadInput = document.getElementsByName("Cantidad")[0];

    if (!isNumber(cantidadInput.value)) {
        alert("Por favor, ingrese solo números en el campo de Cantidad de la venta.");
        markInvalidFieldVM(cantidadInput);
        return false;
    }

    unmarkFieldVM(cantidadInput);
    return true;
}

//FUNCIÓN PARA VALIDAR CAMPO TOTAL
function validateTotalV() {
    var totalInput = document.getElementsByName("Total")[0];

    if (!isNumber(totalInput.value)) {
        alert("Por favor, ingrese solo números en el campo de Total de la venta.");
        markInvalidFieldVM(totalInput);
        return false;
    }

    unmarkFieldVM(totalInput);
    return true;
}

//FUNCIÓN PARA VALIDAR QUE TODOS LOS CAMPOS ESTEN LLENOS PARA AVANZAR
function validateFormV() {
    var fecha = document.getElementsByName("Fecha")[0].value;
    var cliente = document.getElementsByName("Cliente")[0].value;
    var producto = document.getElementsByName("Producto")[0].value;
    var cantidad = document.getElementsByName("Cantidad")[0].value;
    var total = document.getElementsByName("Total")[0].value;

    if (fecha === "" || cliente === "" || producto === "" || cantidad === "" || total === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario de agregar Venta.");
        return false;
    }
    return true;  
}
//-----------------------------------FUNCIONES DE MODIFICAR VENTAS-----------------------------------
//FUNCIÓN PARA VALIDAR NÚMERO MODIFICAR 

function isNumber(value) {
    return !isNaN(parseFloat(value)) && isFinite(value);
}

//FUNCIÓN PARA VALIDAR CAMPO CANTIDAD MODIFICAR
function validateCantidadVM() {
    var cantidadInput = document.getElementsByName("cantidad")[0];
    if (!isNumber(cantidadInput.value)) {
        alert("Por favor, ingrese solo números en el campo de cantidad de la venta.");
        markInvalidFieldVM(cantidadInput);
        return false;
    }
    unmarkFieldVM(cantidadInput);
    return true;
}

//FUNCIÓN PARA VALIDAR CAMPO TOTAL MODIFICAR
function validateTotalVM() {
    var totalInput = document.getElementsByName("total")[0];
    if (!isNumber(totalInput.value)) {
        alert("Por favor, ingrese solo números en el campo de total de la venta.");
        markInvalidFieldVM(totalInput);
        return false;
    }
    unmarkFieldVM(totalInput);
    return true;
}

//FUNCIÓN PARA VALIDAR PRECIO MODIFICAR
function validatePrecioVM() {
    var precioInput = document.getElementsByName("precio")[0];
    if (!isNumber(precioInput.value)) {
        alert("Por favor, ingrese solo números en el campo de precio de la venta.");
        markInvalidFieldVM(precioInput);
        return false;
    }
    unmarkFieldVM(precioInput);
    return true;
}

//FUNCIÓN PARA VALIDAR CAMPOS LLENOS
function validateFormVM() {
    var idVenta = document.getElementsByName("Venta")[0].value;
    var fechaVenta = document.getElementsByName("Fecha_venta")[0].value;
    var idCliente = document.getElementsByName("Cliente")[0].value;
    var idProducto = document.getElementsByName("Producto")[0].value;
    var cantidad = document.getElementsByName("cantidad")[0].value;
    var precio = document.getElementsByName("precio")[0].value;
    var total = document.getElementsByName("total")[0].value;

    if (idVenta === "" || fechaVenta === "" || idCliente === "" || idProducto === "" || cantidad === "" || precio === "" || total === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario.");
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


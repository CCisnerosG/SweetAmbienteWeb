//------------------------------------FUNCIONES INSERTAR PRODUCTOS------------------------------------

// FUNCIÓN PARA EL PRECIO DE INSERT
function validatePriceI() {
    var precioInput = document.getElementsByName("Precio")[0];

    if (isNaN(precioInput.value) || precioInput.value === "") {
        alert("Por favor, ingrese un valor numérico válido para el precio del producto.");
        markInvalidFieldVM(precioInput);
        return false;
    }

    unmarkFieldVM(precioInput);
    return true;
}

// FUNCIÓN PARA LA CANTIDAD DE INSERT
function validateQuantityI() {
    var cantidadInput = document.getElementsByName("Cantidad")[0];

    if (isNaN(cantidadInput.value) || cantidadInput.value === "") {
        alert("Por favor, ingrese un valor numérico válido para la cantidad del producto.");
        markInvalidFieldVM(cantidadInput);
        return false;
    }

    unmarkFieldVM(cantidadInput);
    return true;
}

//FUNCIÓN PARA VALIDAR QUE EN EL INSERT TODOS LOS CAMPOS ESTEN LLENOS
function validateFormI() {
    var nombre = document.getElementsByName("Nombre")[0].value;
    var categoria = document.getElementsByName("categoria")[0].value;
    var cantidad = document.getElementsByName("Cantidad")[0].value;
    var descripcion = document.getElementsByName("Descripcion")[0].value;
    var tamano = document.getElementsByName("Tamano")[0].value;
    var precio = document.getElementsByName("Precio")[0].value;
    var Imagen = document.getElementsByName("Imagen")[0].value;

    if (nombre === "" || categoria === "" || cantidad === "" || descripcion === "" || tamano === "" || precio === ""||Imagen === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario para agregar un producto.");
        return false;
    }

    return validatePriceI() && validateQuantityI();
}


//------------------------------------FUNCIONES MODIFICAR PRODUCTOS------------------------------------


// FUNCIÓN PARA EL PRECIO DE MODIFICAR
function validatePriceM() {
    var precioInput = document.getElementsByName("Precio")[0];

    if (isNaN(precioInput.value) || precioInput.value === "") {
        alert("Por favor, ingrese un valor numérico válido para modificar el precio del Producto.");
        markInvalidFieldVM(precioInput);
        return false;
    }

    unmarkFieldVM(precioInput);
    return true;
}

// FUNCIÓN PARA LA CANTIDAD DE MODIFICAR
function validateQuantityM() {
    var cantidadInput = document.getElementsByName("Cantidad")[0];

    if (isNaN(cantidadInput.value) || cantidadInput.value === "") {
        alert("Por favor, ingrese un valor numérico válido para modificar la cantidad del Producto.");
        markInvalidFieldVM(cantidadInput);
        return false;
    }

    unmarkFieldVM(cantidadInput);
    return true;
}

//FUNCIÓN PARA VALIDAR QUE EN EL MODIFICAR TODOS LOS CAMPOS ESTEN LLENOS
function validateFormM() {
    var producto = document.getElementsByName("producto")[0].value;
    var nombre = document.getElementsByName("Nombre")[0].value;
    var categoria = document.getElementsByName("categoria")[0].value;
    var cantidad = document.getElementsByName("Cantidad")[0].value;
    var descripcion = document.getElementsByName("Descripcion")[0].value;
    var tamano = document.getElementsByName("Tamano")[0].value;
    var precio = document.getElementsByName("Precio")[0].value;
    var Imagen = document.getElementsByName("Imagen")[0].value;


    if (producto === "" || nombre === "" || categoria === "" || cantidad === "" || descripcion === "" || tamano === "" || precio === ""||Imagen === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario de modificar el Producto deseado.");
        return false;
    }

    return validatePriceM() && validateQuantityM();
}

// Funciones auxiliares para cambiar el color de fondo de los campos inválidos
function markInvalidFieldVM(element) {
    element.style.backgroundColor = "#FFB6C1"; // Cambiar a un color que indique error
}

function unmarkFieldVM(element) {
    element.style.backgroundColor = ""; // Restaurar el color por defecto
}

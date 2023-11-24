//------------------------------FUNCIONES PARA INSERTAR PROVEEDORES-------------------------------------

//FUNCIÓN DE VALIDAR CAMPOS LLENOS
function validarFormularioProveedores() {
    var nombre = document.getElementsByName("Nombre")[0].value;
    var primerApellido = document.getElementsByName("Primer_apellido")[0].value;
    var segundoApellido = document.getElementsByName("Segundo_apellido")[0].value;
    var telefono = document.getElementsByName("Numero_telefonico")[0].value;
    var correo = document.getElementsByName("Correo")[0].value;
    var idIngrediente = document.getElementsByName("id_ingrediente")[0].value;
    var estado = document.getElementsByName("Estado")[0].value;
    var imagen = document.getElementsByName("Imagen")[0].value;

    if (nombre === "" || primerApellido === "" || segundoApellido === "" || telefono === "" || correo === "" || idIngrediente === "" || estado === "" || imagen === "") {
        alert("Por favor, llena todos los campos para enviar el formulario para ingresar un proveedor");
        return false;
    }
    return true;
}



//------------------------------FUNCIONES PARA MODIFICAR PROVEEDORES-------------------------------------

//FUNCIÓN DE VALIDAR CAMPOS LLENOS
function validarFormularioProveedoresM() {
    var proveedorSelect = document.getElementsByName("proveedor")[0];
    var nombre = document.getElementsByName("Nombre")[0].value;
    var primerApellido = document.getElementsByName("Primer_apellido")[0].value;
    var segundoApellido = document.getElementsByName("Segundo_apellido")[0].value;
    var telefono = document.getElementsByName("Numero_telefonico")[0].value;
    var correo = document.getElementsByName("Correo")[0].value;
    var estado = document.getElementsByName("Estado")[0].value;
    var imagen = document.getElementsByName("Imagen")[0].value;

    if (proveedorSelect.value === "" || nombre === "" || primerApellido === "" || segundoApellido === "" || telefono === "" || correo === "" || estado === "" || imagen === "") {
        alert("Por favor, llena todos los campos para enviar el formulario para modificar un proveedor.");
        return false;
    }
     
    return true;
}


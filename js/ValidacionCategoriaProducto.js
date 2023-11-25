//-------------------------------------------FUNCIONES DE CATEGORIA PRODUCTO DE INSERTAR-------------------------------------------

//FUNCIÓN DE VALIDAR TODOS LOS CAMPOS LLENOS DE INSERTAR
function validateFormCPI() {
    var nombre = document.getElementsByName("Nombre")[0].value;
    var descripcion = document.getElementsByName("Descripcion")[0].value;
    var imagen = document.getElementsByName("Imagen")[0].value;

    if (nombre === "" || descripcion === "" || imagen === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario para agregar una nueva categoria.");
        return false;
    }

    return true;
}

//-------------------------------------------FUNCIONES DE CATEGORIA PRODUCTO DE MODIFICAR-------------------------------------------


//FUNCIÓN DE VALIDAR TODOS LOS CAMPOS LLENOS DE MODIFICAR
function validateFormCPM() {
    var categoria = document.getElementsByName("categoria")[0].value;
    var nombre = document.getElementsByName("Nombre")[0].value;
    var descripcion = document.getElementsByName("Descripcion")[0].value;
    var imagen = document.getElementsByName("Imagen")[0].value;

    if (categoria === "" || nombre === "" || descripcion === "" || imagen === "") {
        alert("Por favor, complete todos los campos antes de enviar el formulario para modificar la categoria deseada.");
        return false;
    }

    return true;
}


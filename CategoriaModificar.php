<?php
//Funcion para actualizar un dato en especifico de una categoria

    if (isset($_POST['accion']) && $_POST['accion'] === 'modificarCategoria') {
        $id_categoria = $_POST['id_categoria'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $imagen = $__POST['Imagen']; 

        include('DAL/conexion.php');
        $conexion = Conecta();

        $sql = "UPDATE SweetSeasons.categorias SET Nombre = '$nombre', Descripcion = '$descripcion', ruta_imagen = '$imagen' WHERE id_categoria = '$id_categoria'";
    
        $result_update = mysqli_query($conexion, $sql); 
    
        if ($result_update) {
            echo "Categoría modificada con éxito.";
            exit();
        } else {
            echo "Error al modificar la categoría: "  . mysqli_error($conexion);
        }
    }

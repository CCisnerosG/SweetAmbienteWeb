<?php
//Funcion para actualizar un dato en especifico de una categoria

    if (isset ($_POST['modificarCategoria'])) {
        $id_categoria = $_POST['categoria'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $imagen = $_POST['Imagen']; 

        include('DAL/conexion.php');
        $conexion = Conecta();

        $sql = "UPDATE SweetSeasons.categoria SET Nombre = '$nombre', Descripcion = '$descripcion', ruta_imagen = 'image/categoria/$imagen' WHERE id_categoria = '$id_categoria'";
    
        $result_update = mysqli_query($conexion, $sql); 
    
        if ($result_update) {
            echo "<script>alert('Registro modificado con éxito.');</script>";

        } else {
            echo "<script>alert('Error al modificar la categoria: " . mysqli_error($conexion) . "');</script>";
        }
        header("refresh:0.5;url=Categorias.php");
    }

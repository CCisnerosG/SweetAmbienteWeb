<?php
//Funcion para actualizar un dato en especifico de una categoria

    if (isset ($_POST['modificarCategoria'])) {
        $id_categoria = $_POST['categoria'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        if(isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0){
            $imagen = $_FILES['Imagen']['name'];
            $ruta_imagen = 'image/categoria/' . $imagen;
    
            move_uploaded_file($_FILES['Imagen']['tmp_name'], $ruta_imagen);
        } else {
            $imagen = '';
            $ruta_imagen = '';
        }

        include('DAL/conexion.php');
        $conexion = Conecta();

        $sql = "UPDATE SweetSeasons.categoria SET Nombre = '$nombre', Descripcion = '$descripcion', ruta_imagen = '$ruta_imagen' WHERE id_categoria = '$id_categoria'";
    
        $result_update = mysqli_query($conexion, $sql); 
    
        if ($result_update) {
            echo "<script>alert('Registro modificado con éxito.');</script>";

        } else {
            echo "<script>alert('Error al modificar la categoria: " . mysqli_error($conexion) . "');</script>";
        }
        header("refresh:0.5;url=Categorias.php");
    }

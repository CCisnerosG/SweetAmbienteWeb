<?php

    if(isset($_POST['agregarCategoria'])){
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
    
        $sql = "INSERT INTO SweetSeasons.categoria (Nombre, Descripcion, ruta_imagen) VALUES ( ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sss", $nombre, $descripcion, $ruta_imagen);
    
        if ($stmt->execute()) {
            echo "<script>alert('Registro agregado con éxito.');</script>";
        } else {
            echo "<script>alert('Error al agregar la categoría: " . $stmt->error . "');</script>";
        }
    
        $stmt->close();
        $conexion->close();
        header("refresh:0.5;url=Categorias.php");
    }

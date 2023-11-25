<?php

    if(isset($_POST['agregarCategoria'])){
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $imagen = 'image/categoria/' . $_POST['Imagen'];
    
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $sql = "INSERT INTO SweetSeasons.categoria (Nombre, Descripcion, ruta_imagen) VALUES ( ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sss", $nombre, $descripcion, $imagen);
    
        if ($stmt->execute()) {
            echo "<script>alert('Registro agregado con éxito.');</script>";
        } else {
            echo "<script>alert('Error al agregar la categoría: " . $stmt->error . "');</script>";
        }
    
        $stmt->close();
        $conexion->close();
        header("refresh:0.5;url=Categorias.php");
    }

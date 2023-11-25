<?php

    if(isset($_POST['ingredientesAgregar'])){
        $nombre = $_POST['Nombre'];
        $unidad = $_POST['Unidad_medida'];
        $precio = $_POST['Precio'];
        $id_proveedor = $_POST['proveedor'];
        $imagen = 'image/ingredientes/' .  $_POST['Imagen'];
    
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $sql = "INSERT INTO SweetSeasons.ingredientes (Nombre, Unidad_medida, Precio, id_proveedor , ruta_imagen) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $unidad, $precio ,$id_proveedor , $imagen);
    
        if ($stmt->execute()) {
            echo "<script>alert('Registro agregado con éxito.');</script>";
        } else {
            echo "<script>alert('Error al agregar la categoría: " . $stmt->error . "');</script>";
        }
    
        $stmt->close();
        $conexion->close();
        header("refresh:0.5;url=Ingredientes.php");
    }

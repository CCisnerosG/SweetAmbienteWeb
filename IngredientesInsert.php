<?php

    if(isset($_POST['ingredientesAgregar'])){
        $nombre = $_POST['Nombre'];
        $unidad = $_POST['Unidad_medida'];
        $precio = $_POST['Precio'];
        $id_proveedor = $_POST['id_proveedor'];
        $imagen = 'image/ingredientes/' .  $_POST['Imagen'];
    
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $sql = "INSERT INTO SweetSeasons.ingredientes (Nombre, Unidad_medida, Precio, id_proveedor , ruta_imagen) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $unidad, $precio ,$id_proveedor , $imagen);
    
        if ($stmt->execute()) {
            echo "Se han ingresado correctamente los datos del ingrediente";
        } else {
            echo "Error al ingresar los datos del ingrediente: " . $stmt->error;
        }
    
        $stmt->close();
        $conexion->close();
    }

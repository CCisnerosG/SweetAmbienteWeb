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
            echo "Se han ingresado correctamente los datos de la categoria";
        } else {
            echo "Error al ingresar los datos de la categoria: " . $stmt->error;
        }
    
        $stmt->close();
        $conexion->close();
    }

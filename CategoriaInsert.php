<?php

    if(isset($_POST['agregarCategoria'])){
        $id_categoria = $_POST['id_categoria'];
        $nombre = $_POST['Nombre'];
        $descripcion = $_POST['Descripcion'];
        $imagen = $_POST['Imagen'];
    
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $sql = "INSERT INTO SweetSeasons.categoria (id_categoria, Nombre, Descripcion, ruta_imagen) VALUES (?, ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssss", $id_categoria, $nombre, $descripcion, $imagen);
    
        if ($stmt->execute()) {
            echo "Se han ingresado correctamente los datos de la categoria";
        } else {
            echo "Error al ingresar los datos de la categoria: " . $stmt->error;
        }
    
        $stmt->close();
        $conexion->close();
    }

<?php
if(isset($_POST['agregar'])){
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['Nombre'];
    $id_categoria = $_POST['id_categoria'];
    $cantidad = $_POST['Cantidad'];
    $descripcion = $_POST['Descripcion'];
    $tamano = $_POST['Tamano'];
    $precio = $_POST['Precio'];
    $imagen = $_POST['Imagen'];

    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "INSERT INTO SweetSeasons.Productos (id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio, ruta_imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssdd", $id_producto, $nombre, $id_categoria, $cantidad, $descripcion, $tamano, $precio, $imagen);

    if ($stmt->execute()) {
        echo "Se han ingresado correctamente los datos";
    } else {
        echo "Error al ingresar los datos: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();

    header('Location: Productos.php');
}
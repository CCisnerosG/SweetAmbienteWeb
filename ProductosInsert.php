<?php
if(isset($_POST['agregar'])){
    $nombre = $_POST['Nombre'];
    $id_categoria = $_POST['categoria'];
    $cantidad = $_POST['Cantidad'];
    $descripcion = $_POST['Descripcion'];
    $tamano = $_POST['Tamano'];
    $precio = $_POST['Precio'];

    $nombre_temporal = $_FILES['Imagen']['tmp_name'];
    $nombre_img = $_FILES['Imagen']['name'];
    move_uploaded_file($nombre_temporal, 'image/productos/' . $nombre_img);

    $imagen = 'image/productos/' . $nombre_img;

    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "INSERT INTO SweetSeasons.Productos (Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio, ruta_imagen) VALUES ( ?, ?, ?, ?, ?, ?, ?)";


    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $id_categoria, $cantidad, $descripcion, $tamano, $precio, $imagen);

    if ($stmt->execute()) {
        echo "<script>alert('Registro agregado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al agregar el producto: " . $stmt->error . "');</script>";
    }
    header("refresh:0.5;url=Productos.php");
}
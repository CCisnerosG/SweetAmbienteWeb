<?php
if (isset($_POST['modificar'])) {
    $id_producto = $_POST['producto'];
    $nombre = $_POST['Nombre'];
    $id_categoria = $_POST['categoria'];
    $cantidad = $_POST['Cantidad'];
    $descripcion = $_POST['Descripcion'];
    $tamano = $_POST['Tamano'];
    $precio = $_POST['Precio'];
    $imagen = 'image/productos/' . $_POST['Imagen'];
    
    include('DAL/conexion.php');
    $conexion = Conecta();
    
    $sql = "UPDATE SweetSeasons.Productos SET Nombre = '$nombre', id_categoria = '$id_categoria', Cantidad = '$cantidad', Descripcion = '$descripcion', Tamano = '$tamano', Precio = '$precio', ruta_imagen = '$imagen' WHERE id_producto = '$id_producto'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "<script>alert('Registro modificado con éxito.');</script>";
        
    } else {
        echo "<script>alert('Error al modificar el registro: " . mysqli_error($conexion) . "');</script>";
    }

    header("refresh:0.5;url=Productos.php");
}
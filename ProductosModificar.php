<?php
if (isset($_POST['modificar'])) {
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
     echo $id_producto = $_POST['id_producto'];;
    $sql = "UPDATE SweetSeasons.Productos SET Nombre = '$nombre', id_categoria = '$id_categoria', Cantidad = '$cantidad', Descripcion = '$descripcion', Tamano = '$tamano', Precio = '$precio', ruta_imagen = '$imagen' WHERE id_producto = '$id_producto'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "Registro modificado con éxito.";
        header('Location: Productos.php');
        exit();
    } else {
        echo "Error al modificar el registro: "  . mysqli_error($conexion);
    }
}
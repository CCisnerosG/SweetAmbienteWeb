<?php
if (isset($_POST['modificar'])) {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['Nombre'];
    $id_categoria = $_POST['id_categoria'];
    $cantidad = $_POST['Cantidad'];
    $descripcion = $_POST['Descripcion'];
    $tamano = $_POST['Tamano'];
    $precio = $_POST['Precio'];
    
    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "UPDATE SweetSeasons.Productos SET Nombre = '$nombre', id_categoria = '$id_categoria',Cantidad =  '$cantidad', Descripcion = '$descripcion',Tamano = '$tamano', Precio = '$precio' WHERE id_producto = $id_producto";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Registro modificado con éxito.";
    } else {
        echo "Error al modificar el registro: " . $conexion->error;
    }
}
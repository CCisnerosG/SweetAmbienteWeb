<?php
if (isset($_POST['ingredientesModificar'])) {
    $id_ingrediente = $_POST['id_ingrediente'];
    $nombre = $_POST['Nombre'];
    $unidad = $_POST['Unidad_medida'];
    $precio = $_POST['Precio'];
    $id_proveedor = $_POST['id_proveedor'];
    $imagen = $_POST['Imagen'];
    
    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "UPDATE SweetSeasons.ingredientes SET Nombre = '$nombre',  Unidad_medida = '$unidad',id_proveedor = '$id_proveedor', Precio = '$precio', ruta_imagen = 'image/ingredientes/$imagen' WHERE id_ingrediente = '$id_ingrediente'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "Registro modificado con éxito.";
        exit();
    } else {
        echo "Error al modificar el registro: "  . mysqli_error($conexion);
    }
}
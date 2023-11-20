<?php

    if (isset ($_POST['modificarCompras'])) {
        $id_compra = $_POST['id_compra'];
        $Fecha_compra = $_POST['Fecha_compra'];
        $id_proveedor = $_POST['id_proveedor'];
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $total = $_POST['total'];

        include('DAL/conexion.php');
        $conexion = Conecta();

        $sql = "UPDATE SweetSeasons.compras SET Fecha_compra = '$Fecha_compra', id_proveedor = '$id_proveedor', id_producto = '$id_producto', cantidad = '$cantidad', precio = '$precio', total = '$total' WHERE id_compra = '$id_compra'";
    
        $result_update = mysqli_query($conexion, $sql); 
    
        if ($result_update) {
            echo "Compra modificada con éxito.";
            
        } else {
            echo "Error al modificar la compra: "  . mysqli_error($conexion);
        }

        header("Location: Compras.php");
    }

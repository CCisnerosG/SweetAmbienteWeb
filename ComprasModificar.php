<?php
    if (isset ($_POST['modificarCompras'])) {
        $id_compra = $_POST['Compra'];
        $Fecha_compra = $_POST['Fecha_compra'];
        $id_proveedor = $_POST['Proveedor'];
        $id_producto = $_POST['Producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $total = $_POST['total'];

        include('DAL/conexion.php');
        $conexion = Conecta();

        $sql = "UPDATE SweetSeasons.compras SET Fecha_compra = '$Fecha_compra', id_proveedor = '$id_proveedor', id_producto = '$id_producto', cantidad = '$cantidad', precio = '$precio', total = '$total' WHERE id_compra = '$id_compra'";
    
        $result_update = mysqli_query($conexion, $sql); 
    
        if ($result_update) {
            echo "<script>alert('Registro modificado con éxito.');</script>";
            
        } else {
            echo "<script>alert('Error al modificar el registro: " . mysqli_error($conexion) . "');</script>";
        }

        header("refresh:0.5;url=Compras.php");
    }

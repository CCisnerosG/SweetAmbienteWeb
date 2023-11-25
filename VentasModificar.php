<?php

    if (isset ($_POST['modificarVentas'])) {
        $id_venta = $_POST['id_venta'];
        $Fecha_venta = $_POST['Fecha_venta'];
        $id_cliente = $_POST['id_cliente'];
        $id_producto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $total = $_POST['total'];

        include('DAL/conexion.php');
        $conexion = Conecta();

        $sql = "UPDATE SweetSeasons.ventas SET Fecha_venta = '$Fecha_venta', id_cliente = '$id_cliente', id_producto = '$id_producto', cantidad = '$cantidad', precio = '$precio', total = '$total' WHERE id_venta = '$id_venta'";
    
        $result_update = mysqli_query($conexion, $sql); 
    
        if ($result_update) {
            echo "<script>alert('Registro modificado con éxito.');</script>";
            
        } else {
            echo "<script>alert('Error al modificar la venta: " . mysqli_error($conexion) . "');</script>";
        }

        header("refresh:0.5;url=Ventas.php");
    }

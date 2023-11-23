<?php

    if (isset($_POST['eliminarVentas'])) {
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $id_venta = $_POST['id_venta'];
        $sql = "DELETE FROM SweetSeasons.ventas WHERE id_venta = $id_venta ";
    
        if ($conexion->query($sql) === TRUE) {
            echo "Se ha eliminado la categoria con éxito.";
        } else {
            echo "Error al eliminar la categoria: " . $conexion->error;
        }
        
        header('Location: Ventas.php');
    }

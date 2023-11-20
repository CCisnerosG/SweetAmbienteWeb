<?php
//Funcion para eliminirar un registro en especifico de las categorias

    if (isset($_POST['eliminarCompras'])) {
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $id_compra = $_POST['id_compra'];
        $sql = "DELETE FROM SweetSeasons.compras WHERE id_compra = $id_compra ";
    
        if ($conexion->query($sql) === TRUE) {
            echo "Se ha eliminado la categoria con éxito.";
        } else {
            echo "Error al eliminar la categoria: " . $conexion->error;
        }
        
        header('Location: Compras.php');
    }

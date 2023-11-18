<?php
//Funcion para eliminirar un registro en especifico de las categorias

    if (isset($_POST['eliminarCategoria'])) {
        include('DAL/conexion.php');
        $conexion = Conecta();
    
        $id_categoria = $_POST['id_categoria'];
        $sql = "DELETE FROM SweetSeasons.categoria WHERE id_categoria = $id_categoria";
    
        if ($conexion->query($sql) === TRUE) {
            echo "Se ha eliminado la categoria con éxito.";
        } else {
            echo "Error al eliminar la categoria: " . $conexion->error;
        }
        
        header('Location: categorias.php');
    }

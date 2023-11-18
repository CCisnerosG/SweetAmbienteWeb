<?php

if (isset($_POST['eliminarIngredientes'])) {
    include('DAL/conexion.php');
    $conexion = Conecta();

    $id_ingredientes = $_POST['id_ingrediente'];
    $sql = "DELETE FROM SweetSeasons.ingredientes WHERE id_ingrediente = $id_ingredientes ";

    if ($conexion->query($sql) === TRUE) {
        echo "Se ha eliminado el ingrediente con éxito.";
    } else {
        echo "Error al eliminar el ingrediente: " . $conexion->error;
    }
    
    header('Location: Ingredientes.php');
}

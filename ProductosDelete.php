<?php
if (isset($_POST['eliminar'])) {
    include('DAL/conexion.php');
    $conexion = Conecta();

    $id_producto = $_POST['id_producto'];
    $sql = "DELETE FROM SweetSeasons.Productos  WHERE id_producto = $id_producto";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Se ha eliminado el producto con éxito.";
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }
}
?>
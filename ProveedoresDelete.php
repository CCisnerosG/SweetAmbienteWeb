<?php
if (isset($_POST['eliminar'])) {
    include('DAL/conexion.php');
    $conexion = Conecta();

    $id_proveedor = $_POST['id_proveedor'];
    $sql = "DELETE FROM SweetSeasons.proveedores WHERE id_proveedor = $id_proveedor";

    if ($conexion->query($sql) === TRUE) {
        echo "Se ha eliminado el proveedor con éxito.";
    } else {
        echo "Error al eliminar el proveedor: " . $conexion->error;
    }

    header('Location: Proveedores.php');
}
?>


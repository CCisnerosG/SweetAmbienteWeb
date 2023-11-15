<?php
if (isset($_POST['eliminar'])) {
    include('DAL/conexion.php');
    $conexion = Conecta();

    $id_cliente = $_POST['id_cliente'];
    $sql = "DELETE FROM SweetSeasons.clientes WHERE id_cliente = $id_cliente";

    if ($conexion->query($sql) === TRUE) {
        echo "Se ha eliminado el cliente con éxito.";
    } else {
        echo "Error al eliminar el cliente: " . $conexion->error;
    }

    header('Location: Clientes.php');
}
?>

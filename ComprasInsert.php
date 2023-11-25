<?php
include('DAL/conexion.php');

if(isset($_POST['agregarCompras'])){
    $fechaCompra = $_POST['Fecha'];
    $idProveedor = $_POST['Proveedor'];
    $idProducto = $_POST['Producto'];
    $cantidad = $_POST['Cantidad'];

    $precio = obtenerPrecioProducto($idProducto);

    $total = $_POST['Total'];

    $conexion = Conecta();
    $sql = "INSERT INTO SweetSeasons.compras (Fecha_compra, id_proveedor, id_producto, Cantidad, Precio, Total) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("siidii", $fechaCompra, $idProveedor, $idProducto, $cantidad, $precio, $total);

    if ($stmt->execute()) {
        echo "<script>alert('Registro agregado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al agregar la compra registro: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conexion->close();

    header("refresh:0.5;url=Compras.php");
}

function obtenerPrecioProducto($idProducto) {
    $conexion = Conecta();
    $query = "SELECT Precio FROM SweetSeasons.Productos WHERE id_producto = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $idProducto);
    $stmt->execute();
    $stmt->bind_result($precio);
    $stmt->fetch();
    $stmt->close();
    $conexion->close();

    return $precio;
}
?>

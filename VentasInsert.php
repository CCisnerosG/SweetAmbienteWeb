<?php
include('DAL/conexion.php');

if(isset($_POST['agregarVentas'])){
    $fechaventa = $_POST['Fecha'];
    $idCliente = $_POST['Cliente'];
    $idProducto = $_POST['Producto'];
    $cantidad = $_POST['Cantidad'];
    $total = $_POST['Total'];

    $precio = obtenerPrecioProducto($idProducto);

    $conexion = Conecta();
    $sql = "INSERT INTO SweetSeasons.ventas (Fecha_venta, id_cliente, id_producto, Cantidad, Precio, Total) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("siidii", $fechaventa, $idCliente, $idProducto, $cantidad, $precio, $total);

    if ($stmt->execute()) {
        echo "<script>alert('Registro agregado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al agregar la venta: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conexion->close();

    header("refresh:0.5;url=Ventas.php");
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

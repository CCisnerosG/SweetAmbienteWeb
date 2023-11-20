<?php
include('DAL/conexion.php');

$conexion = Conecta();

$query = "SELECT id_compra, Fecha_compra, id_proveedor, id_producto, cantidad, precio, total FROM SweetSeasons.compras";
$result = mysqli_query($conexion, $query);

$hayResultados = false;

while ($row = mysqli_fetch_assoc($result)) {
    $hayResultados = true;
    echo "<br>";
    echo "<p class='text'><strong>Id Categoría:</strong> " . $row['id_compra'] . "</p>";
    echo "<p class='text'><strong>Fecha de Compra:</strong> " . $row['Fecha_compra'] . "</p>";
    echo "<p class='text'><strong>Id Proveedor:</strong> " . $row['id_proveedor'] . "</p>";
    echo "<p class='text'><strong>Id Producto:</strong> " . $row['id_producto'] . "</p>";
    echo "<p class='text'><strong>Cantidad:</strong> " . $row['cantidad'] . "</p>";
    echo "<p class='text'><strong>Precio:</strong> " . $row['precio'] . "</p>";
    echo "<p class='text'><strong>Total:</strong> " . $row['total'] . "</p>";
    echo '<form method ="post" action="ComprasModificar.html">'; 
    echo '<input type="hidden" name="id_compra" value="' . $row['id_compra'] . '">';          
    echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
    echo '</form>';
    echo '<form method ="post" action="ComprasDelete.php">';      
    echo '<input type="hidden" name="id_compra" value="' . $row['id_compra'] . '">';
    echo '<button class="btn" type="submit" name="eliminarCompras">Eliminar</button>';
    echo '</form>';
}   

if (!$hayResultados) {
    echo "<p class='text'>Historial de compras vacío</p>";
}
?>

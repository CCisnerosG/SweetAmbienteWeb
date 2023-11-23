<?php
include('DAL/conexion.php');

$conexion = Conecta();

$query = "SELECT id_compra, Fecha_compra, id_proveedor, id_producto, cantidad, precio, total FROM SweetSeasons.compras";
$result = mysqli_query($conexion, $query);

$hayResultados = false;

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th>ID Compra</th>';
echo '<th>Fecha de Compra</th>';
echo '<th>ID Proveedor</th>';
echo '<th>ID Producto</th>';
echo '<th>Cantidad</th>';
echo '<th>Precio</th>';
echo '<th>Total</th>';
echo '<th>Modificar</th>';
echo '<th>Eliminar</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = mysqli_fetch_assoc($result)) {
    $hayResultados = true;
    echo '<tr>';
    echo '<td>' . $row['id_compra'] . '</td>';
    echo '<td>' . $row['Fecha_compra'] . '</td>';
    echo '<td>' . $row['id_proveedor'] . '</td>';
    echo '<td>' . $row['id_producto'] . '</td>';
    echo '<td>' . $row['cantidad'] . '</td>';
    echo '<td>' . $row['precio'] . '</td>';
    echo '<td>' . $row['total'] . '</td>';
    echo '<td>';
    echo '<form method ="post" action="ComprasModificar.html">'; 
    echo '<input type="hidden" name="id_compra" value="' . $row['id_compra'] . '">';          
    echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
    echo '</form>';
    echo '</td>';
    echo '<td>';
    echo '<form method ="post" action="ComprasDelete.php">';      
    echo '<input type="hidden" name="id_compra" value="' . $row['id_compra'] . '">';
    echo '<button class="btn" type="submit" name="eliminarCompras">Eliminar</button>';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
}   

echo '</tbody>';
echo '</table>';
echo '</div>';

if (!$hayResultados) {
    echo "<p class='text'>Historial de compras vacío</p>";
}

mysqli_close($conexion);
?>

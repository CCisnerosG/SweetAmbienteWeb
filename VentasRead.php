<?php
include('DAL/conexion.php');

$conexion = Conecta();

$query = "SELECT id_venta, Fecha_venta, id_cliente, id_producto, Cantidad, Precio, Total FROM SweetSeasons.ventas";
$result = mysqli_query($conexion, $query);

$hayResultados = false;

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th>Id Venta</th>';
echo '<th>Fecha de venta</th>';
echo '<th>Id Cliente</th>';
echo '<th>Id Producto</th>';
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
    echo '<td>' . $row['id_venta'] . '</td>';
    echo '<td>' . $row['Fecha_venta'] . '</td>';
    echo '<td>' . $row['id_cliente'] . '</td>';
    echo '<td>' . $row['id_producto'] . '</td>';
    echo '<td>' . $row['Cantidad'] . '</td>';
    echo '<td>' . $row['Precio'] . '</td>';
    echo '<td>' . $row['Total'] . '</td>';
    echo '<td>';
    echo '<form method ="post" action="VentasModificar.html">'; 
    echo '<input type="hidden" name="id_venta" value="' . $row['id_venta'] . '">';          
    echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
    echo '</form>';
    echo '</td>';
    echo '<td>';
    echo '<form method ="post" action="VentasDelete.php">';      
    echo '<input type="hidden" name="id_venta" value="' . $row['id_venta'] . '">';
    echo '<button class="btn" type="submit" name="eliminarVentas">Eliminar</button>';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
}   

echo '</tbody>';
echo '</table>';
echo '</div>';

if (!$hayResultados) {
    echo "<p class='text'>Historial de ventas vacío</p>";
}

mysqli_close($conexion);
?>

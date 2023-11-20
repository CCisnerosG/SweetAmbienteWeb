<?php
include('DAL/conexion.php');

$conexion = Conecta();

$query = "SELECT id_proveedor, Nombre, Primer_apellido, Segundo_apellido, Numero_telefonico, Correo, id_ingrediente, Estado, ruta_imagen FROM SweetSeasons.Proveedores";
$result = mysqli_query($conexion, $query);

while ($row = mysqli_fetch_assoc($result)) {

    echo "<br>";
    echo "<img class='img' src=" . $row['ruta_imagen'] . ">";
    echo "<p class='text'><strong>Nombre:</strong> " . $row['Nombre'] . "</p>";
    echo "<p class='text'><strong>Primer Apellido:</strong> " . $row['Primer_apellido'] . "</p>";
    echo "<p class='text'><strong>Segundo Apellido:</strong> " . $row['Segundo_apellido'] . "</p>";
    echo "<p class='text'><strong>Número Telefónico:</strong> " . $row['Numero_telefonico'] . "</p>";
    echo "<p class='text'><strong>Correo:</strong> " . $row['Correo'] . "</p>";
    echo "<p class='text'><strong>ID Ingrediente:</strong> " . $row['id_ingrediente'] . "</p>";
    echo "<p class='text'><strong>Estado:</strong> " . $row['Estado'] . "</p>";
    echo '<form method ="post" action="ProveedoresModificar.html">';
    echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
    echo '</form>';
    echo '<form method ="post" action="ProveedoresDelete.php">';
    echo '<input type="hidden" name="id_proveedor" value="' . $row['id_proveedor'] . '">';
    echo '<button class="btn" type="submit" name="eliminar">Eliminar</button>';
    echo '</form>';
}

?>

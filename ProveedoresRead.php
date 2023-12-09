<?php
include('DAL/conexion.php');

$conexion = Conecta();

$query = "SELECT id_proveedor, Nombre, Primer_apellido, Segundo_apellido, Numero_telefonico, Correo, id_ingrediente, Estado, ruta_imagen FROM SweetSeasons.Proveedores";
$result = mysqli_query($conexion, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card mb-3 shadow-sm' style='max-width: 70%; border:none; margin-left: 1rem; background-color: #CBE6F9;'>";
    echo "  <div class='row no-gutters'>";
    echo "    <div class='col-md-4'>";
    echo "       <img class='img_categoria' src=" . $row['ruta_imagen'] . ">";
    echo "    </div>";
    echo "    <div class='col-md-8'>";
    echo "      <div class='card-body'>";
    echo "        <p class='card-text title_ingredientes'> "  . $row['Nombre'] ."  " . $row['Primer_apellido'] . "  " . $row['Segundo_apellido'] .  "</p>";
    echo "        <p class='card-text text_ingredientes'><strong>Número Telefónico:</strong> " . $row['Numero_telefonico'] . "</p>";
    echo "        <p class='card-text text_ingredientes'><strong>Correo:</strong> " . $row['Correo'] . "</p>";
    echo "        <p class='card-text text_ingredientes'><strong>ID Ingrediente:</strong> " . $row['id_ingrediente'] . "</p>";
    echo "        <p class='card-text text_ingredientes'><strong>Estado:</strong> " . $row['Estado'] . "</p>";
    echo "      </div>";
    echo "      <div class='btn-group' style='margin: 0 auto;'>";
    if (isset($_SESSION['usuario'])) {
    echo "        <form method='post' action='ProveedoresDelete.php'>";
    echo "          <input type='hidden' name='id_proveedor' value='" . $row['id_proveedor'] . "'>";
    echo "          <button class='btn' style='margin: 1rem; type='submit' name='eliminar'>Eliminar</button>";
    echo "        </form>";
    }
    echo "      </div>";
    echo "    </div>";
    echo "  </div>";
    echo "</div>";
    echo "<br>";    

}

?>

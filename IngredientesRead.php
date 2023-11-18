<?php
//funcion para traer los datos de Ingredientes ingresados en la BD

    include('DAL/conexion.php');

    $conexion = Conecta();

    $query = "SELECT id_ingrediente, Nombre, Unidad_medida, Precio, id_proveedor, ruta_imagen FROM SweetSeasons.ingredientes";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo"<br>";
        echo "<img class='img' src=" . $row['ruta_imagen'] . ">";
        echo "<p class='text'><strong>Nombre:</strong> " . $row['Nombre'] . "</p>";
        echo "<p class='text'><strong>Descripción:</strong> " . $row['Unidad_medida'] . "</p>";
        echo "<p class='text'><strong>Precio:</strong> " . $row['Precio'] . "</p>";
        echo '<form method ="post" action="IngredientesModificar.html">';      
        echo '<button class="btn" type="submit" name="ingredientesModificar">Modificar</button>';
        echo '</form>';
        echo '<form method ="post" action="IngredientesDelete.php">';      
        echo '<input type="hidden" name="id_ingrediente" value="' . $row['id_ingrediente'] . '">';
        echo '<button class="btn" type="submit" name="eliminarIngredientes">Eliminar</button>';
        echo '</form>';

    }   
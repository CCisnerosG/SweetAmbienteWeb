<?php
//funcion para traer los datos de categorias ingresados en la BD

    include('DAL/conexion.php');

    $conexion = Conecta();

    $query = "SELECT id_categoria, Nombre, Descripcion, ruta_imagen FROM SweetSeasons.categoria";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo"<br>";
        echo "<img class='img' src=" . $row['ruta_imagen'] . ">";
        echo "<p class='text'><strong>Nombre:</strong> " . $row['Nombre'] . "</p>";
        echo "<p class='text'><strong>Descripción:</strong> " . $row['Descripcion'] . "</p>";
        echo '<form method ="post" action="CategoriaModificar.html">';      
        echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
        echo '</form>';
        echo '<form method ="post" action="CategoriaDelete.php">';      
        echo '<input type="hidden" name="id_categoria" value="' . $row['id_categoria'] . '">';
        echo '<button class="btn" type="submit" name="eliminarCategoria">Eliminar</button>';
        echo '</form>';
    }   


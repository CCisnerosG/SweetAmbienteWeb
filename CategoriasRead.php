<?php
//funcion para traer los datos de categorias ingresados en la BD

    include('DAL/conexion.php');

    $conexion = Conecta();

    $query = "SELECT id_categoria, Nombre, Descripcion, ruta_imagen FROM SweetSeasons.categoria";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card rounded-pill text-center overflow-hidden border-0 shadow' style='width: 18rem;'>";
        echo "  <img src='" . $row['ruta_imagen'] . "' class='card-img-top img_round' alt=''>";
        echo "  <div class='card-body bg-light' style='color: #4F260A'> ";
        echo "      <p class='title_ingredientes'>" . $row['Nombre'] . "</p>";
        echo "      <p class='text_ingredientes'>" . $row['Descripcion'] . "</p>";
        if (isset($_SESSION['usuario'])) {
        echo "      <form method='post' action='CategoriaDelete.php'>";
        echo "        <input type='hidden' name='id_categoria' value='" . $row['id_categoria'] . "'>";
        echo "        <button class='btn btn-dark px-3 rounded-pill' type='submit' name='eliminarCategoria'>Eliminar</button>";
        echo "      </form>";
        }
        echo "  </div>";
        echo "</div>";

    }   

<section class="container">
        <?php
        include('DAL/conexion.php');

        $conexion = Conecta();

        $query = "SELECT id_cliente, Nombre, Primer_apellido, Segundo_apellido, Correo, Numero_telefonico, Direccion, ruta_imagen FROM SweetSeasons.clientes";
        $result = mysqli_query($conexion, $query);
        echo "<br>";
        echo "<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='card mb-3 shadow-sm' style='max-width: 45%; margin-left: 1rem;'>";
            echo "  <div class='row no-gutters'>";
            echo "    <div class='col-md-4'>";
            echo "       <img class='img_categoria' src=" . $row['ruta_imagen'] . ">";
            echo "    </div>";
            echo "    <div class='col-md-8'>";
            echo "      <div class='card-body'>";
            echo "        <p class='card-text title_ingredientes'> " . $row['Nombre'] . "  " . $row['Primer_apellido'] . "  " . $row['Segundo_apellido'] .  "</p>";
            echo "        <p class='card-text text_ingredientes'><strong>Número Telefónico:</strong> " . $row['Numero_telefonico'] . "</p>";
            echo "        <p class='card-text text_ingredientes'><strong>Correo:</strong> " . $row['Correo'] . "</p>";
            echo "        <p class='card-text text_ingredientes'><strong>Dirección:</strong> " . $row['Direccion'] . "</p>";
            echo "      </div>";
            echo "      <div class='btn-group' style='margin: 0 auto;'>";
            echo "        <form method='post' action='ClientesDelete.php'>";
            echo "          <input type='hidden' name='id_cliente' value='" . $row['id_cliente'] . "'>";
            echo "          <button class='btn' style='margin: 1rem;' type='submit' name='eliminar'>Eliminar</button>";
            echo "        </form>";
            echo "      </div>";
            echo "    </div>";
            echo "  </div>";
            echo "</div>";
            echo "<br>";
            
        }
        ?>
        
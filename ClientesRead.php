<section class="container">
        <?php
        include('DAL/conexion.php');

        $conexion = Conecta();

        $query = "SELECT id_cliente, Nombre, Primer_apellido, Segundo_apellido, Correo, Numero_telefonico, Direccion, ruta_imagen FROM SweetSeasons.clientes";
        $result = mysqli_query($conexion, $query);
        echo "<br>";
        echo '<form method ="post" action="ClientesModificarVista.php">';
        echo '<button class="btn" type="submit" name="modificar">Modificar</button>';
        echo '</form>';
        echo "<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>";
            echo "<img class='img' src=" . $row['ruta_imagen'] . ">";
            echo "<p class='text'><strong>Nombre:</strong> " . $row['Nombre'] . "</p>";
            echo "<p class='text'><strong>Primer Apellido:</strong> " . $row['Primer_apellido'] . "</p>";
            echo "<p class='text'><strong>Segundo Apellido:</strong> " . $row['Segundo_apellido'] . "</p>";
            echo "<p class='text'><strong>Correo:</strong> " . $row['Correo'] . "</p>";
            echo "<p class='text'><strong>Número Telefónico:</strong> " . $row['Numero_telefonico'] . "</p>";
            echo "<p class='text'><strong>Dirección:</strong> " . $row['Direccion'] . "</p>";
            echo '<form method ="post" action="ClientesDelete.php">';
            echo '<input type="hidden" name="id_cliente" value="' . $row['id_cliente'] . '">';
            echo '<button class="btn" type="submit" name="eliminar">Eliminar</button>';
            echo '</form>';
        }
        ?>
        
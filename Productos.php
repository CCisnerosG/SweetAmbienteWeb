<?php
include "include/templates/header.php";
?>

<h3>Productos</h3>
        <main>
            <section class="container">
                
                    <?php
                        include('DAL/conexion.php');

                        $conexion = Conecta();

                        $query = "SELECT id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio FROM SweetSeasons.Productos";
                        $result = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo"<br>";
                            echo "<p class='text'>" . $row['Nombre'] . "</p>";
                            echo "<p class='text'>" . $row['Descripcion'] . "</p>";
                            echo "<p class='text'>" . $row['Cantidad'] . "</p>";
                            echo "<p class='text'>" . $row['Tamano'] . "</p>";
                            echo "<p class='text'>" . $row['Precio'] . "</p>"; 
                            echo '<form method ="post" action="ProductosDelete.php">';      
                            echo '<input type="hidden" name="id_producto" value="' . $row['id_producto'] . '">';
                            echo '<button type="submit" name="eliminar">Eliminar</button>';
                            echo '</form>';
                        }   
                    ?> 
            
            </section>
        </main>

    </body>
<?php
include "include/templates/footer.php";
?>
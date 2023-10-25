<?php
include "include/templates/header.php";
?>

<h3>Productos</h3>
        <main>
            <section class="container">
                    <?php
                        try {
                        require_once "DAL/CRUD.php";
                        $elSQL = "SELECT id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio  FROM sweetseasons.productos";
                        $myArray = getArray($elSQL);
                        
                        echo "<div class='card'>";
                        if(!empty($myArray)){
                            foreach ($myArray  as $value) {
                                echo"<br>";
                                echo "<p class='text'>" . $value['Nombre'] . "</p>";
                                echo "<p class='text'>" . $value['Descripcion'] . "</p>";
                                echo "<p class='text'>" . $value['Cantidad'] . "</p>";
                                echo "<p class='text'>" . $value['Tamano'] . "</p>";
                                echo "<p class='text'>" . $value['Precio'] . "</p>";
                               
                            }
                        }else{
                            echo "<p>No hay registros</p>";
                        }
                        echo "</div>";
                        }
                        catch (\Throwable $th) {
                            echo $th;
                        }
                        
                    ?>

                    
            
            </section>
        </main>

    </body>
<?php
include "include/templates/footer.php";
?>
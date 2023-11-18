<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3">Ingredientes </h3>
        <main>
            <section class="container">
                <?php
                echo "<button class='btn' type='submit' name='Insertar'><a href='IngredientesInsert.html'>Agregar</a></button>";
                 
                include_once('IngredientesRead.php'); 
                ?>
            </section>
        </main>
        

<?php
include "include/templates/footer.php";
?>
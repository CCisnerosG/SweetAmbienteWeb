<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3">Categoría de Productos </h3>
        <main>
            <section class="container">
                <?php
                echo "<button class='btn' type='submit' name='Insertar'><a href='CategoriaInsert.html'>Agregar</a></button>";
                 
                include_once('CategoriasRead.php'); 
                ?>
            </section>
        </main>
        

<?php
include "include/templates/footer.php";
?>
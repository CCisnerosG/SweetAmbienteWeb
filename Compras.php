<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3">Historial de compras </h3>
        <main>
            <section class="container">
                <?php
                echo "<button class='btn' type='submit' name='Insertar'><a href='ComprasInsertVista.php'>Agregar</a></button>";
                 
                include_once('ComprasRead.php'); 
                ?>
            </section>
        </main>
        

<?php
include "include/templates/footer.php";
?>
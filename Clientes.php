<?php
include "include/templates/header.php";
?>
    <br>
    <h3 class="h3">Clientes</h3>
    <main>
        <section class="container">
            <?php
            echo "<button class='btn' type='submit' name='Insertar'><a href='ClientesInsert.html'>Agregar</a></button>";
             
            include_once('ClientesRead.php'); 
            ?>
        </section>
    </main>

<?php
include "include/templates/footer.php";
?>

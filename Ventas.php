<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3" style="text-align: center";>Historial de ventas </h3>
        <main>
            <section class="container">
                <?php
                echo "<button class='btn' type='submit' name='Insertar'><a href='VentasInsertVista.php'>Agregar</a></button>";
                 
                include_once('VentasRead.php'); 
                ?>
            </section>
        </main>
        

<?php
include "include/templates/footer.php";
?>
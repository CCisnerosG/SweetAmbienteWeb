<?php
include "include/templates/header.php";

?>
    <br>
        <h3 class="h3" style="text-align: center";>Historial de ventas </h3>
        <main>
            <section class="container">
                <?php
                if (isset($_SESSION['usuario'])) {
                    echo '<div style="text-align: center;">';
                        echo '    <div class="btn-group" style="margin-left: 2.5rem;">';
                            echo "<button class='btn' type='submit' name='Insertar'><a href='VentasInsertVista.php'>Agregar</a></button>";
                        echo '    </div>';
                    echo '    </div>';
                }
                 
                include_once('VentasRead.php'); 
                ?>
            </section>
        </main>
        

<?php
include "include/templates/footer.php";
?>
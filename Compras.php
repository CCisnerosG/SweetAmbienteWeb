<?php
include "include/templates/header.php";
session_start();
?>
    <br>
        <h3 class="h3" style="text-align: center";>Historial de compras </h3>
        <main>
            <section class="container">
                <?php
                if (isset($_SESSION['usuario'])) {
                    echo '<div style="text-align: center;">';
                        echo '    <div class="btn-group" style="margin-left: 2.5rem;">';
                            echo "<button class='btn' type='submit' name='Insertar'><a href='ComprasInsertVista.php'>Agregar</a></button>";
                        echo '    </div>';
                    echo '    </div>';
                }
                include_once('ComprasRead.php'); 
                ?>
            </section>
        </main>
        

<?php
include "include/templates/footer.php";
?>
<?php
include 'include/templates/header.php';

?>
<br><br>
<h3 class="h3" style="text-align: center;">Productos </h3>
<?php
if (isset($_SESSION['usuario'])) {
    echo '<div style="text-align: center;">';
    echo '    <div class="btn-group" style="margin-left: 2.5rem;">';
    echo '        <form method="post" action="ProductosInsertView.php">';
    echo '            <button class="btn" type="submit" name="Insertar">Agregar</button>';
    echo '        </form>';
    echo '    </div>';
    
    echo '    <div class="btn-group" style="margin-left: 2.5rem;">';
    echo '        <form method="post" action="ProductosModificarVista.php">';
    echo '            <button class="btn" type="submit" name="modificar">Modificar</button>';
    echo '        </form>';
    echo '    </div>';
    echo '</div>';
}
?>
<main role="main">
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                <?php
                include_once('ProductosRead.php');
                ?>
            </div>
        </div>
    </div>
</main>

<?php
include "include/templates/footer.php";
?>
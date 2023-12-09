<?php
include "include/templates/header.php";

?>
<br>
<h3 class="h3" style="text-align: center;">Categoría de Productos </h3>
<?php
if (isset($_SESSION['usuario'])) {
echo '<div style="text-align: center;">';
echo '    <div class="btn-group" style="margin-left: 2.5rem;">';
echo '        <form method="post" action="CategoriaInsert.html">';
echo '            <button class="btn" type="submit" name="Insertar">Agregar</button>';
echo '        </form>';
echo '    </div>';

echo '    <div class="btn-group" style="margin-left: 2.5rem;">';
echo '        <form method="post" action="CategoriaModificarVista.php">';
echo '            <button class="btn" type="submit" name="modificar">Modificar</button>';
echo '        </form>';
echo '    </div>';
echo '</div>';
}
?>
<main role="main">
    <div class="album py-5"  >
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
                <?php
                include_once('CategoriasRead.php');
                ?>
            </div>
        </div>
    </div>
</main>

<?php
include "include/templates/footer.php";
?>
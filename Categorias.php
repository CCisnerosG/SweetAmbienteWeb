<?php
include "include/templates/header.php";
?>
<br>
<h3 class="h3" style="text-align: center;">Categoría de Productos </h3>
<div style="text-align: center;">
    <div class="btn-group" style="margin-left: 2.5rem;">
        <form method="post" action="CategoriaInsert.html">
            <button class='btn' type='submit' name='Insertar'>Agregar</button>
        </form>
    </div>

    <div class="btn-group" style="margin-left: 2.5rem;">
        <form method="post" action="CategoriaModificarVista.php">
            <button class="btn" type="submit" name="modificar">Modificar</button>
        </form>
    </div>
</div>

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
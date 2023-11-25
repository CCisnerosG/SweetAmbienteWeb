<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3">Ingredientes </h3>

        <div class="btn-group" style="margin-left: 2.5rem;">
            <form method ="post" action="IngredientesInsertView.php">
                <button class='btn' type='submit' name='Insertar'>Agregar</a></button>
            </form>
        </div>

        <div class="btn-group" style="margin-left: 2.5rem;">
            <form method ="post" action="IngredientesModificarVista.php">    
                <button class="btn" type="submit" name="ingredientesModificar">Modificar</button>
            </form>
        </div>

        <main role="main">
            <div class="album py-5 ">
                <div class="container">
                    <div class="row">
                        <?php
                        include_once('IngredientesRead.php'); 
                        ?>
                    </div>
                </div>
            </div>
        </main>
        

<?php
include "include/templates/footer.php";
?>
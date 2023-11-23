<?php
include "include/templates/header.php";
?>
    <br>
        <h3 class="h3">Ingredientes </h3>
        <button class='btn' type='submit' name='Insertar'><a href='IngredientesInsert.html'>Agregar</a></button>

        <form method ="post" action="IngredientesModificar.html">    
            <button class="btn" type="submit" name="ingredientesModificar">Modificar</button>
        </form>

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
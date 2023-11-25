<?php
include 'include/templates/header.php';
?>
<br><br>
<h3 class="h3">Productos </h3>

        <div class="btn-group" style="margin-left: 2.5rem;">
            <form method ="post" action="ProductosInsertView.php"> 
                <button class='btn' type='submit' name='Insertar'>Agregar</button>
            </form>
        </div>

        <div class="btn-group" style="margin-left: 2.5rem;">
            <form method ="post" action="ProductosModificarVista.php"> 
                <button class="btn" type="submit" name="modificar">Modificar</button>
            </form>
        </div>

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
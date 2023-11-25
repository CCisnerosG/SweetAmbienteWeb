<?php
include 'include/templates/header.php';
?>
    
    <h3 class="h3">Modificar ingrediente</h3>
    <section>
        <form method="post" action="ingredientesModificar.php" onsubmit="return validateAllFieldsIngrediente()">
            <label for="ingrediente">Seleccione el ingrediente que se desea modificar: </label>
            <select name="ingrediente">
            <?php
                include('DAL/conexion.php');
                $conexion = Conecta();
                
                $query = "SELECT id_ingrediente, Nombre FROM SweetSeasons.ingredientes";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_ingrediente'] . "\">" . $row['Nombre'] . "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener los ingredientes</option>";
                }

                mysqli_close($conexion);
            ?>
            </select>
            <br>
            <br>
            <label for="Nombre">Digite el nombre que se desea modificar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="Unidad_medida">Digite la cantidad y la unidad medida que se desea modificar: </label>
            <input type="text" name="Unidad_medida" placeholder= "Digite la Unidad de medida">
            <br>
            <br>
            <label for="Precio">Digite el precio que se desea modificar: </label>
            <input type="number" name="Precio" placeholder="Digite el precio"  onblur="validatePrecioIngredienteM()">
            <br>
            <br>
             <label for="proveedor">Seleccione el proveedor que se desea modificar: </label>
            <select name="proveedor">
            <?php
                    
                    $conexion = Conecta();
                    
                    $query = "SELECT id_proveedor, Nombre FROM SweetSeasons.proveedores";
                    $result = mysqli_query($conexion, $query);
    
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"" . $row['id_proveedor'] . "\">" . $row['Nombre'] . "</option>";
                        }
                    } else {
                        echo "<option value=\"\">Error al obtener los proveedores</option>";
                    }
    
                    mysqli_close($conexion);
                ?>
            </select> 
            <br>
            <br>
            <label for="ruta_imagen">Suba la imagen que se desea modificar: </label>
            <input lass="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input class="btn" type="submit" name="ingredientesModificar" value="Modificar">
        </form>
    </section>
    <script src="js/ValidacionIngredientes.js"></script>

<?php
include "include/templates/footer.php";
?>
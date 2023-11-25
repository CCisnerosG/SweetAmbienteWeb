<?php
include 'include/templates/header.php';
?>

    <h3 class="h3">Agregar ingrediente</h3>
    <section>
        <form method="post" action="IngredientesInsert.php" onsubmit="return validateAllFieldsIngrediente()">
            <label for="Nombre">Digite el nombre que se desea agregar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="Unidad_medida">Digite la cantidad y la unidad medida que se desea agregar: </label>
            <input type="text" name="Unidad_medida" placeholder="Digite la Unidad de medida">
            <br>
            <br>
            <label for="Precio">Digite el precio que se desea agregar: </label>
            <input type="number" name="Precio" placeholder="Digite el precio" onblur="validatePrecioIngrediente()">
            <br>
            <br>
            <label for="proveedor">Seleccione el proveedor que se desea modificar: </label>
            <select name="proveedor">
            <?php
                include('DAL/conexion.php');
                $conexion = Conecta();
                
                $query = "SELECT id_proveedor, Nombre FROM SweetSeasons.proveedores";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_proveedor'] . "\">" . $row['Nombre'] . "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener proveedores</option>";
                }

                mysqli_close($conexion);
            ?>
            </select>
            <br>
            <br>
            <label for="ruta_imagen">Suba la imagen que se desea agregar: </label>
            <input lass="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input class="btn" type="submit" name="ingredientesAgregar" value="Agregar">
        </form>
    </section>
    <script src="ValidacionIngredientes.js"></script>

<?php
include "include/templates/footer.php";
?>
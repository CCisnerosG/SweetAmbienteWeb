<?php
include 'include/templates/header.php';
?>

    <h3 class="h3">Agregar Productos</h3>
    <section>
        <form method="post" action="ProductosInsert.php" onsubmit="return validateFormI()">
            <label for="Nombre">Digite el nombre que se desea agregar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="categoria">Seleccione la categoria que se desea elegir: </label>
            <select name="categoria">
                <?php
                    include('DAL/conexion.php');
                    $conexion = Conecta();
                    
                    $query = "SELECT id_categoria, Nombre FROM SweetSeasons.categoria";
                    $result = mysqli_query($conexion, $query);
    
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"" . $row['id_categoria'] . "\">" . $row['Nombre'] . "</option>";
                        }
                    } else {
                        echo "<option value=\"\">Error al obtener las categorías</option>";
                    }
    
                    mysqli_close($conexion);
                ?>
            </select>
            <br>
            <br>
            <label for="Cantidad">Digite la Cantidad que se desea agregar: </label>
            <input type="number" name="Cantidad" placeholder="Digite la cantidad" onblur="validateQuantityI()">
            <br>
            <br>
            <label for="Descripcion">Digite la Descripcion que se desea agregar: </label>
            <input type="text" name="Descripcion" placeholder="Digite la descripción ">
            <br>
            <br>
            <label for="Tamano">Seleccione el Tamaño que se desea agregar:</label>
                <select name="Tamano">
                    <option value='S'>S</option>
                    <option value='M'>M</option>
                    <option value='L'>L</option>
                </select>
            <br>
            <br>
            <label for="Precio">Digite el Precio que se desea agregar: </label>
            <input type="number" name="Precio" placeholder="Digite el precio" onblur="validatePriceI()">
            <br>
            <br>
            <label for="ruta_imagen">Suba la imagen que se desea agregar: </label>
            <input lass="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input type="submit" name="agregar" value="Agregar">
        </form>
    </section>

<?php
include "include/templates/footer.php";
?>
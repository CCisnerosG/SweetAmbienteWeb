<?php
include 'include/templates/header.php';
?>

    <h3 class="h3">Modificar Productos</h3>
    <section>
        <form method="post" action="ProductosModificar.php"  onsubmit="return validateFormM()">
            <label for="producto">Seleccione el producto que se desea modificar: </label>
            <select name="producto">
            <?php
                include('DAL/conexion.php');
                $conexion = Conecta();
                
                $query = "SELECT id_producto, Nombre FROM SweetSeasons.Productos";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_producto'] . "\">" . $row['Nombre'] . "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener productos</option>";
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
            <label for="categoria">Seleccione la categoria que se desea elegir: </label>
            <select name="categoria">
                <?php
                    
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
            <label for="Cantidad">Digite la Cantidad que se desea modificar: </label>
            <input type="number" name="Cantidad" placeholder="Digite la cantidad de productos" onblur="validateQuantityM()">
            <br>
            <br>
            <label for="Descripcion">Digite la Descripcion que se desea modificar: </label>
            <input type="text" name="Descripcion" placeholder="Digite la descripción del producto">
            <br>
            <br>
            <label for="Tamano">Digite el Tamaño que se desea modificar: </label>
                <select name="Tamano">
                    <option value='S'>S</option>
                    <option value='M'>M</option>
                    <option value='L'>L</option>
                </select>
            <br>
            <br>
            <label for="Precio">Digite el Precio que se desea modificar: </label>
            <input type="number" name="Precio" placeholder="Digite el precio del producto" onblur="validatePriceM()">
            <br>
            <br>
            <label for="Imagen">Suba la imagen que se desea modificar: </label>
            <input lass="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input type="submit" name="modificar" value="Modificar">
        </form>
    </section>

    <script src="ValidacionProductos.js"></script>

<?php
include "include/templates/footer.php";
?>
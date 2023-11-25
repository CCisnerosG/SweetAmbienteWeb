<?php
include 'include/templates/header.php';
?>
    <br><br>
    <h3 class="h3">Agregar Compra</h3>
    <section>
        <form method="post" action="ComprasInsert.php"onsubmit="return validateFormI()">
            <label for="Fecha">Ingrese la fecha de compra: </label>
            <input type="date" name="Fecha">
            <br>
            <br>
            <label for="Proveedor">Seleccione el proveedor de esa compra: </label>
            <select name="Proveedor">
                <?php
                include('DAL/conexion.php');
                $conexion = Conecta();
                
                $query = "SELECT id_proveedor, Nombre FROM SweetSeasons.Proveedores";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_proveedor'] . "\">" . $row['Nombre'] . "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener proveedores</option>";
                }

                ?>
            </select>
            <br>
            <br>
            <label for="Producto">Seleccione el producto que se compró: </label>
            <select name="Producto">
            <?php
                $conexion = Conecta();
                
                $query = "SELECT id_producto, Nombre, Precio FROM SweetSeasons.Productos";
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
            <input type="hidden" name="Precio" id="Precio" value="">
            <br>
            <br>
            <label for="Cantidad">Ingrese la cantidad de artículos comprados: </label>
            <input type="text" name="Cantidad" placeholder="Digite la cantidad" onblur="validateCantidadCompra()">
            <br>
            <br>
            <label for="Total">Ingrese el total invertido en la compra: </label>
            <input type="text" name="Total" placeholder="Digite el total"  onblur="validateTotalCompra()">
            <br>
            <input class="btn" type="submit" name="agregarCompras" value="Agregar">
        </form>
    </section>
    <script src="ValidacionCompras.js"></script>

<?php
include "include/templates/footer.php";
?>
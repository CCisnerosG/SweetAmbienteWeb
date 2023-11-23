<?php
include "include/templates/header.php";
?>
<br><br>
<h3 class="h3">Agregar venta</h3>
<section>
    <form method="post" action="VentasInsert.php">
        <label for="Fecha">Ingrese la fecha de venta: </label>
        <input type="date" name="Fecha">
        <br>
        <br>
        <label for="Cliente">Seleccione el cliente que realizó la compra: </label>
        <select name="Cliente">
            <?php
            include('DAL/conexion.php');
            $conexion = Conecta();

            $query = "SELECT id_cliente, Nombre FROM SweetSeasons.clientes";
            $result = mysqli_query($conexion, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=\"" . $row['id_cliente'] . "\">" . $row['Nombre'] . "</option>";
                }
            } else {
                echo "<option value=\"\">Error al obtener clientes</option>";
            }

            ?>
        </select>
        <br>
        <br>
        <label for="Producto">Seleccione el producto que se vendió: </label>
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
        <label for="Cantidad">Ingrese la cantidad de artículos vendidos: </label>
        <input type="text" name="Cantidad" placeholder="Digite la cantidad">
        <br>
        <br>
        <label for="Total">Ingrese el total vendido: </label>
        <input type="text" name="Total" placeholder="Digite el total">
        <br>
        <input class="btn" type="submit" name="agregarVentas" value="Agregar">
    </form>
</section>


<?php
include "include/templates/footer.php";
?>
<?php
include 'include/templates/header.php';
?>
    <br><br>
    <h3 class="h3" style="text-align: center;">Agregar Compra</h3>
    <section class="container" style="width:40%">
        <form method="post" action="ComprasInsert.php" onsubmit="return validateFormI()" class="row g-3">
            <div class="col-12">
                <label for="Fecha" class="form-label">Ingrese la fecha de compra:</label>
                <input type="date" name="Fecha" class="form-control">
            </div>
            <div class="col-12">
                <label for="Proveedor" class="form-label">Seleccione el proveedor de esa compra:</label>
                <select name="Proveedor" class="form-select">
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
            </div>
            <div class="col-12">
                <label for="Producto" class="form-label">Seleccione el producto que se compró:</label>
                <select name="Producto" class="form-select">
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
            </div>
            <div class="col-12">
                <label for="Cantidad" class="form-label">Ingrese la cantidad de artículos comprados:</label>
                <input type="text" name="Cantidad" class="form-control" placeholder="Digite la cantidad" onblur="validateCantidadCompra()">
            </div>
            <div class="col-12">
                <label for="Total" class="form-label">Ingrese el total invertido en la compra:</label>
                <input type="text" name="Total" class="form-control" placeholder="Digite el total" onblur="validateTotalCompra()">
            </div>
            <div class="col-12">
                <input class="btn btn-primary" type="submit" name="agregarCompras" value="Agregar">
            </div>
        </form>
    </section>
    <script src="js/ValidacionCompras.js"></script>

<?php
include "include/templates/footer.php";
?>
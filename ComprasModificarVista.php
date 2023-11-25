<?php
include 'include/templates/header.php';
?>
<body>

    <br><br><br><br>
    <h3 class="h3" style="text-align:center;">Modificar Compra</h3>
    <section class="container" style="width: 40%;">
        <form method="post" action="ComprasModificar.php" onsubmit="return validateFormM()" class="row g-3">
            <div class="col-12">
                <label for="Compra" class="form-label">Ingrese la compra que desea modificar:</label>
                <select name="Compra" class="form-select">
                    <?php
                        include('DAL/conexion.php');
                        $conexion = Conecta();
                        
                        $query = "SELECT id_compra FROM SweetSeasons.compras";
                        $result = mysqli_query($conexion, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value=\"" . $row['id_compra'] . "\">" . $row['id_compra'] .  "</option>";
                            }
                        } else {
                            echo "<option value=\"\">Error al obtener compras</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-12">
                <label for="Fecha_compra" class="form-label">Ingrese la fecha en la que se realizó la compra:</label>
                <input type="date" name="Fecha_compra" class="form-control">
            </div>
            <div class="col-12">
                <label for="Proveedor" class="form-label">Seleccione el proveedor de esa compra:</label>
                <select name="Proveedor" class="form-select">
                    <?php
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
            </div>
            <div class="col-12">
                <label for="cantidad" class="form-label">Seleccione la cantidad:</label>
                <input type="number" name="cantidad" placeholder="Digite la cantidad" class="form-control" onblur="validateCantidadM()">
            </div>
            <div class="col-12">
                <label for="precio" class="form-label">Seleccione el precio:</label>
                <input type="number" name="precio" placeholder="Digite el precio" class="form-control" onblur="validatePrecioM()">
            </div>
            <div class="col-12">
                <label for="total" class="form-label">Seleccione el total:</label>
                <input type="number" name="total" placeholder="Digite el total" class="form-control" onblur="validateTotalM()">
            </div>
            <div class="col-12">
                <input class="btn btn-primary" type="submit" name="modificarCompras" value="Modificar">
            </div>
        </form>
    </section>
    <script src="ValidacionCompras.js"></script>

</body>
<?php
include "include/templates/footer.php";
?>
<?php
include "include/templates/header.php";
?>
 <a class="arrow_module" href="Ventas.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>

    <h3 class="h3_2" style="text-align:center;">Modificar Venta</h3>
    <section class="container" style="width:40%;">
        <form method="post" action="VentasModificar.php" onsubmit="return validateFormVM()" class="row g-3">
            <div class="col-12">
                <label for="id_venta" class="form-label">Digite la venta que desea modificar:</label>
                <select name="Venta" class="form-select">
                    <?php
                        include('DAL/conexion.php');
                        $conexion = Conecta();
                        
                        $query = "SELECT id_venta FROM SweetSeasons.ventas";
                        $result = mysqli_query($conexion, $query);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value=\"" . $row['id_venta'] . "\">" . $row['id_venta'] .  "</option>";
                            }
                        } else {
                            echo "<option value=\"\">Error al obtener compras</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-12">
                <label for="Fecha_venta" class="form-label">Ingrese la fecha en la que se realizó la venta:</label>
                <input type="date" name="Fecha_venta" class="form-control">
            </div>
            <div class="col-12">
                <label for="Cliente" class="form-label">Seleccione el cliente que realizó la compra:</label>
                <select name="Cliente" class="form-select">
                    <?php
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
            </div>
            <div class="col-12">
                <label for="Producto" class="form-label">Seleccione el producto:</label>
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
                <label for="cantidad" class="form-label">Digite la cantidad:</label>
                <input type="number" name="cantidad" placeholder="Digite la cantidad" class="form-control" onblur="validateCantidadVM()">
            </div>
            <div class="col-12">
                <label for="precio" class="form-label">Digite el precio:</label>
                <input type="number" name="precio" placeholder="Digite el precio" class="form-control" onblur="validatePrecioVM()">
            </div>
            <div class="col-12">
                <label for="total" class="form-label">Digite el total:</label>
                <input type="number" name="total" placeholder="Digite el total" class="form-control" onblur="validateTotalVM()">
            </div>
            <div class="col-12">
                <input class="btn btn-primary" type="submit" name="modificarVentas" value="Modificar">
            </div>
        </form>
    </section>
    <script src="js/ValidacionVentas.js"></script>


    <footer class="footer">
        <nav>
            <div>
                <p class="FooterText">Sweet Seasons</p>
            </div>
        </nav>
    </footer>
</body>
</html>
<!-- Archivo: VentasInsert.php -->
<?php
include "include/templates/header.php";
?>

<a class="arrow_module" href="Ventas.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>

<h3 class="h3_2" style="text-align: center;">Agregar venta</h3>
<section class="container" style="width: 40%;">
        <form method="post" action="VentasInsert.php" onsubmit="return validateFormV()" class="row g-3">
            <div class="col-12">
                <label for="Fecha" class="form-label">Ingrese la fecha de venta:</label>
                <input type="date" name="Fecha" class="form-control">
            </div>
            <div class="col-12">
                <label for="Cliente" class="form-label">Seleccione el cliente que realizó la compra:</label>
                <select name="Cliente" class="form-select">
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
            </div>
            <div class="col-12">
                <label for="Producto" class="form-label">Seleccione el producto que se vendió:</label>
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
            </div>
            <div class="col-12">
                <label for="Cantidad" class="form-label">Ingrese la cantidad de artículos vendidos:</label>
                <input type="text" name="Cantidad" placeholder="Digite la cantidad" class="form-control" onblur="validateCantidadV()">
            </div>
            <div class="col-12">
                <label for="Total" class="form-label">Ingrese el total vendido:</label>
                <input type="text" name="Total" placeholder="Digite el total" class="form-control" onblur="validateTotalV()">
            </div>
            <div class="col-12">
                <input class="btn btn-primary" type="submit" name="agregarVentas" value="Agregar">
            </div>
        </form>
    </section>

<script src="js/ValidacionVentas.js"></script>

<?php
include "include/templates/footer.php";
?>

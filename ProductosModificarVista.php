<?php
include 'include/templates/header.php';
?>
 <a class="arrow_module" href="Productos.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>
    <div class="container">
    <h3 class="h3_2" style="text-align: center;">Modificar Producto</h3>
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="ProductosModificar.php" enctype="multipart/form-data"  onsubmit="return validateFormM()" class="row g-3">
                    <div class="mb-3">
                        <label for="producto" class="form-label">Seleccione el producto que se desea modificar:</label>
                        <select name="producto" class="form-select">
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
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Nombre">Digite el nombre que se desea modificar:</label>
                        <input class="form-control" type="text" name="Nombre" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="categoria">Seleccione la categoría que se desea elegir:</label>
                        <select name="categoria" class="form-select">
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
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Cantidad">Digite la cantidad que se desea modificar:</label>
                        <input type="number" name="Cantidad" class="form-control" placeholder="Digite la cantidad de productos" onblur="validateQuantityM()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Descripcion">Digite la descripción que se desea modificar:</label>
                        <input type="text" name="Descripcion" class="form-control" placeholder="Digite la descripción del producto">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Tamano">Digite el tamaño que se desea modificar:</label>
                        <select name="Tamano" class="form-select">
                            <option value='S'>S</option>
                            <option value='M'>M</option>
                            <option value='L'>L</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Precio">Digite el precio que se desea modificar:</label>
                        <input type="number" name="Precio" class="form-control" placeholder="Digite el precio del producto" onblur="validatePriceM()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Imagen">Suba la imagen que se desea modificar:</label>
                        <input class="form-control" type="file" name="Imagen" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input class="btn" type="submit" name="modificar" value="Modificar">
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>


    <script src="js/ValidacionProductos.js"></script>

<?php
include "include/templates/footer.php";
?>
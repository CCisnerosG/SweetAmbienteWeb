<?php
include 'include/templates/header.php';
?>
 <a class="arrow_module" href="Productos.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>
    <h3 class="h3_2" style="text-align: center;">Agregar Productos</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="ProductosInsert.php" onsubmit="return validateFormI()" class="row g-3">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Digite el nombre que se desea agregar:</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Seleccione la categoría que se desea elegir:</label>
                        <select name="categoria" class="form-select">
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
                    </div>
                    <div class="mb-3">
                        <label for="Cantidad" class="form-label">Digite la cantidad que se desea agregar:</label>
                        <input type="number" name="Cantidad" class="form-control" placeholder="Digite la cantidad" onblur="validateQuantityI()">
                    </div>
                    <div class="mb-3">
                        <label for="Descripcion" class="form-label">Digite la descripción que se desea agregar:</label>
                        <input type="text" name="Descripcion" class="form-control" placeholder="Digite la descripción">
                    </div>
                    <div class="mb-3">
                        <label for="Tamano" class="form-label">Seleccione el tamaño que se desea agregar:</label>
                        <select name="Tamano" class="form-select">
                            <option value='S'>S</option>
                            <option value='M'>M</option>
                            <option value='L'>L</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Precio" class="form-label">Digite el precio que se desea agregar:</label>
                        <input type="number" name="Precio" class="form-control" placeholder="Digite el precio" onblur="validatePriceI()">
                    </div>
                    <div class="mb-3">
                        <label for="ruta_imagen" class="form-label">Suba la imagen que se desea agregar:</label>
                        <input class="form-control" type="file" name="Imagen" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input class="btn" type="submit" name="agregar" value="Agregar">
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
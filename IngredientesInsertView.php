<?php
include 'include/templates/header.php';
?>
 <a class="arrow_module" href="Ingredientes.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>
    <h3 class="h3_2" style="text-align: center;">Agregar ingrediente</h3>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="IngredientesInsert.php" enctype="multipart/form-data" onsubmit="return validateAllFieldsIngrediente()" class="row g-3">
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Digite el nombre que se desea agregar:</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label for="Unidad_medida" class="form-label">Digite la cantidad y la unidad medida que se desea agregar:</label>
                        <input type="text" name="Unidad_medida" class="form-control" placeholder="Digite la Unidad de medida">
                    </div>
                    <div class="mb-3">
                        <label for="Precio" class="form-label">Digite el precio que se desea agregar:</label>
                        <input type="number" name="Precio" class="form-control" placeholder="Digite el precio" onblur="validatePrecioIngrediente()">
                    </div>
                    <div class="mb-3">
                        <label for="proveedor" class="form-label">Seleccione el proveedor que se desea modificar:</label>
                        <select name="proveedor" class="form-select">
                            <?php
                                include('DAL/conexion.php');
                                $conexion = Conecta();
                                
                                $query = "SELECT id_proveedor, Nombre FROM SweetSeasons.proveedores";
                                $result = mysqli_query($conexion, $query);

                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value=\"" . $row['id_proveedor'] . "\">" . $row['Nombre'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=\"\">Error al obtener proveedores</option>";
                                }

                                mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ruta_imagen" class="form-label">Suba la imagen que se desea agregar:</label>
                        <input class="form-control" type="file" name="Imagen" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input class="btn" type="submit" name="ingredientesAgregar" value="Agregar">
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

    <script src="js/ValidacionIngredientes.js"></script>

<?php
include "include/templates/footer.php";
?>
<?php
include 'include/templates/header.php';
?>
 <a class="arrow_module" href="Ingredientes.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>
    <div class="container">
    <h3 class="h3_2" style="text-align: center;">Modificar Ingrediente</h3>
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="ingredientesModificar.php" onsubmit="return validateAllFieldsIngrediente()" class="row g-3">
                    <div class="mb-3">
                        <label for="ingrediente" class="form-label">Seleccione el ingrediente que se desea modificar: </label>
                        <select name="ingrediente" class="form-select">
                            <?php
                            include('DAL/conexion.php');
                            $conexion = Conecta();
                            
                            $query = "SELECT id_ingrediente, Nombre FROM SweetSeasons.ingredientes";
                            $result = mysqli_query($conexion, $query);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value=\"" . $row['id_ingrediente'] . "\">" . $row['Nombre'] . "</option>";
                                }
                            } else {
                                echo "<option value=\"\">Error al obtener los ingredientes</option>";
                            }

                            mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Nombre">Digite el nombre que se desea modificar: </label>
                        <input class="form-control" type="text" name="Nombre" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Unidad_medida">Digite la cantidad y la unidad medida que se desea modificar: </label>
                        <input class="form-control" type="text" name="Unidad_medida" placeholder= "Digite la Unidad de medida">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Precio">Digite el precio que se desea modificar: </label>
                        <input class="form-control" type="number" name="Precio" placeholder="Digite el precio" onblur="validatePrecioIngredienteM()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="proveedor">Seleccione el proveedor que se desea modificar: </label>
                        <select name="proveedor" class="form-select">
                            <?php
                            $conexion = Conecta();
                            
                            $query = "SELECT id_proveedor, Nombre FROM SweetSeasons.proveedores";
                            $result = mysqli_query($conexion, $query);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value=\"" . $row['id_proveedor'] . "\">" . $row['Nombre'] . "</option>";
                                }
                            } else {
                                echo "<option value=\"\">Error al obtener los proveedores</option>";
                            }

                            mysqli_close($conexion);
                            ?>
                        </select> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ruta_imagen">Suba la imagen que se desea modificar: </label>
                        <input class="form-control" type="file" name="Imagen" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input class="btn" type="submit" name="ingredientesModificar" value="Modificar">
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
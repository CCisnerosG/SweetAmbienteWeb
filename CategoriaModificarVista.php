<?php
include 'include/templates/header.php';
?>
<br><br>
<div class="container">
    <h3 class="h3">Modificar Categoría</h3>
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="CategoriaModificar.php" onsubmit="return validateFormCPM()">
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Seleccione la categoría que se desea modificar:</label>
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
                                echo "<option value=\"\">Error al obtener categorías</option>";
                            }

                            mysqli_close($conexion);
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Digite el nombre que se desea modificar:</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label for="Descripcion" class="form-label">Digite la descripción que se desea modificar:</label>
                        <input type="text" name="Descripcion" class="form-control" placeholder="Digite la descripción">
                    </div>
                    <div class="mb-3">
                        <label for="ruta_imagen" class="form-label">Suba la imagen que se desea modificar:</label>
                        <input class="form-control" type="file" name="Imagen" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="modificarCategoria" value="Modificar">
                    </div>
                </form>
        </div>
    </div>
    </section>
</div>

<script src="js/ValidacionCategoriaProducto.js"></script>

<?php
include "include/templates/footer.php";
?>
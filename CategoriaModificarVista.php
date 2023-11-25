<?php
include 'include/templates/header.php';
?>
    <br><br>
    <h3 class="h3">Modificar Categoría</h3>
    <section>
        <form method="post" action="CategoriaModificar.php" onsubmit="return validateFormCPM()">
            <label for="categoria">Seleccione la categoría que se desea modificar: </label>
            <select name="categoria">
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
                    echo "<option value=\"\">Error al obtener categorias</option>";
                }

                mysqli_close($conexion);
            ?>
            </select>
            <br>
            <br>
            <label for="Nombre">Digite el nombre que se desea modificar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="Descripcion">Digite la Descripcion que se desea modificar: </label>
            <input type="text" name="Descripcion" placeholder="Digite la descripción">
            <br>
            <br>
            <label for="ruta_imagen">Suba la imagen que se desea modificar: </label>
            <input class="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input class="btn" type="submit" name="modificarCategoria" value="Modificar">
            
        </form>
    </section>

    <script src="ValidacionCategoriaProducto.js"></script>

<?php
include "include/templates/footer.php";
?>
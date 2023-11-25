<?php
include 'include/templates/header.php';
?>
<br><br>
    <h3 class="h3">Agregar Proveedores</h3>
    <section>
        <form method="post" action="ProveedoresInsert.php" enctype="multipart/form-data"onsubmit="return validarFormularioProveedores()">
            <label for="Nombre">Digite el nombre que se desea agregar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="Primer_apellido">Digite el primer apellido que se desea agregar: </label>
            <input type="text" name="Primer_apellido" placeholder="Digite el primer apellido">
            <br>
            <br>
            <label for="Segundo_apellido">Digite el segundo apellido que se desea agregar: </label>
            <input type="text" name="Segundo_apellido" placeholder="Digite el segundo apellido">
            <br>
            <br>
            <label for="Numero_telefonico">Digite el número telefónico que se desea agregar: </label>
            <input type="text" name="Numero_telefonico" placeholder="Digite el número telefónico" >
            <br>
            <br>
            <label for="Correo">Digite el correo que se desea agregar: </label>
            <input type="text" name="Correo" placeholder="Digite el correo" >
            <br>
            <br>
            <label for="id_ingrediente">Seleccione el ingrediente que se desea agregar:</label>
            <select name="id_ingrediente">
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
            <br>
            <br>
            <label for="Estado">Seleccione el Estado que se desea agregar:</label>
            <select name="Estado">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
            <br>
            <br>
            <label for="Imagen">Suba la imagen que se desea agregar: </label>
            <input class="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input class="btn"type="submit" name="agregar" value="Agregar">
        </form>
    </section>

    <script src="ValidacionProveedores.js"></script>

<?php
include "include/templates/footer.php";
?>

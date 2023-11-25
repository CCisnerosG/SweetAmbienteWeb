<?php
include 'include/templates/header.php';
?>
<br><br>
    <h3 class="h3">Modificar Proveedores</h3>
    <section>
        <form method="post" action="ProveedoresModificar.php" onsubmit="return validarFormularioProveedoresM()">
            <label for="proveedor">Seleccione el proveedor que se desea modificar: </label>
            <select name="proveedor">
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
            <br>
            <br>
            <label for="Nombre">Digite el nombre que se desea modificar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="Primer_apellido">Digite el primer apellido que se desea modificar: </label>
            <input type="text" name="Primer_apellido" placeholder="Digite el primer apellido">
            <br>
            <br>
            <label for="Segundo_apellido">Digite el segundo apellido que se desea modificar: </label>
            <input type="text" name="Segundo_apellido" placeholder="Digite el segundo apellido">
            <br>
            <br>
            <label for="Numero_telefonico">Digite el número telefónico que se desea modificar: </label>
            <input type="text" name="Numero_telefonico" placeholder="Digite el número telefónico">
            <br>
            <br>
            <label for="Correo">Digite el correo que se desea modificar: </label>
            <input type="text" name="Correo" placeholder="Digite el correo">
            <br>
            <br>
            <label for="Estado">Seleccione el estado que se desea modificar: </label>
            <select name="Estado">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
            <br>
            <br>
            <label for="Imagen">Suba la imagen que se desea modificar: </label>
            <input class="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input class="btn" type="submit" name="modificar" value="Modificar">
        </form>
    </section>
    <script src="ValidacionProveedores.js"></script>

<?php
include "include/templates/footer.php";
?>
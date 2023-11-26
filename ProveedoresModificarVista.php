<?php
include 'include/templates/header.php';
?>
 <a class="arrow_module" href="Proveedores.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>

<div class="container">
<h3 class="h3_2" style="text-align: center;">Modificar Cliente</h3>
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="ProveedoresModificar.php" onsubmit="return validarFormularioProveedoresM()" class="row g-3">
                    <div class="mb-3">
                        <label for="proveedor" class="form-label">Seleccione el proveedor que se desea modificar: </label>
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
                        <label class="form-label" for="Nombre">Digite el nombre que se desea modificar: </label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Primer_apellido">Digite el primer apellido que se desea modificar: </label>
                        <input type="text" name="Primer_apellido" class="form-control" placeholder="Digite el primer apellido">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Segundo_apellido">Digite el segundo apellido que se desea modificar: </label>
                        <input type="text" name="Segundo_apellido" class="form-control" placeholder="Digite el segundo apellido">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Numero_telefonico">Digite el número telefónico que se desea modificar: </label>
                        <input type="text" name="Numero_telefonico" class="form-control" placeholder="Digite el número telefónico" onblur="validateNumeroTelefonoM()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Correo">Digite el correo que se desea modificar: </label>
                        <input type="text" name="Correo" class="form-control" placeholder="Digite el correo" onblur="validateCorreoM()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Estado">Seleccione el estado que se desea modificar: </label>
                        <select name="Estado" class="form-select">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Imagen">Suba la imagen que se desea modificar: </label>
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

    <script src="js/ValidacionProveedores.js"></script>

<?php
include "include/templates/footer.php";
?>
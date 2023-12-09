<?php
include 'include/templates/header.php';
?>

<a class="arrow_module" href="Proveedores.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>

<h3 class="h3_2" style="text-align: center;">Agregar Proveedores</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section>
                    <form method="post" action="ProveedoresInsert.php" enctype="multipart/form-data" onsubmit="return validarFormularioProveedores()" class="row g-3" >
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Digite el nombre que se desea agregar:</label>
                            <input type="text" name="Nombre" class="form-control" placeholder="Digite el nombre">
                        </div>
                        <div class="mb-3">
                            <label for="Primer_apellido" class="form-label">Digite el primer apellido que se desea agregar:</label>
                            <input type="text" name="Primer_apellido" class="form-control" placeholder="Digite el primer apellido">
                        </div>
                        <div class="mb-3">
                            <label for="Segundo_apellido" class="form-label">Digite el segundo apellido que se desea agregar:</label>
                            <input type="text" name="Segundo_apellido" class="form-control" placeholder="Digite el segundo apellido">
                        </div>
                        <div class="mb-3">
                            <label for="Numero_telefonico" class="form-label">Digite el número telefónico que se desea agregar:</label>
                            <input type="text" name="Numero_telefonico" class="form-control" placeholder="Digite el número telefónico" onblur="validateNumeroTelefono()">
                        </div>
                        <div class="mb-3">
                            <label for="Correo" class="form-label">Digite el correo que se desea agregar:</label>
                            <input type="text" name="Correo" class="form-control" placeholder="Digite el correo" onblur="validateCorreo()"> 
                        </div>
                        <div class="mb-3">
                            <label for="id_ingrediente" class="form-label">Seleccione el ingrediente que se desea agregar:</label>
                            <select name="id_ingrediente" class="form-select">
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
                            <label for="Estado" class="form-label">Seleccione el Estado que se desea agregar:</label>
                            <select name="Estado" class="form-select">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Imagen" class="form-label">Suba la imagen que se desea agregar:</label>
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


    <script src="js/ValidacionProveedores.js"></script>

<?php
include "include/templates/footer.php";
?>

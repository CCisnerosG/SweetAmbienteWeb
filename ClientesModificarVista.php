<?php
include "include/templates/header.php";
?>

<a class="arrow_module" href="Clientes.php"><i class="fa-solid fa-arrow-left" style="color: #4F260A; margin-top: 5rem; margin-left: 2rem;"></i></a>

<div class="container">
<h3 class="h3_2" style="text-align: center;">Modificar Cliente</h3>
    <div class="row">
        <div class="col-md-6">
            <section>
                <form method="post" action="ClientesModificar.php" enctype="multipart/form-data" onsubmit="return validarFormularioModificarClientes()">
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Seleccione el cliente que se desea modificar: </label>
                        <select name="cliente" class="form-select">
                        <?php
                            include('DAL/conexion.php');
                            $conexion = Conecta();
                            
                            $query = "SELECT id_cliente, Nombre FROM SweetSeasons.clientes";
                            $result = mysqli_query($conexion, $query);

                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value=\"" . $row['id_cliente'] . "\">" . $row['Nombre'] . "</option>";
                                }
                            } else {
                                echo "<option value=\"\">Error al obtener clientes</option>";
                            }

                            mysqli_close($conexion);
                        ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Nombre">Digite el nombre que se desea modificar: </label>
                        <input class="form-control" type="text" name="Nombre" placeholder="Digite el nombre">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Primer_apellido">Digite el primer apellido que se desea modificar: </label>
                        <input class="form-control" type="text" name="Primer_apellido" placeholder="Digite el primer apellido">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Segundo_apellido">Digite el segundo apellido que se desea modificar: </label>
                        <input class="form-control" type="text" name="Segundo_apellido" placeholder="Digite el segundo apellido">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Correo">Digite el correo que se desea modificar: </label>
                        <input class="form-control" type="text" name="Correo" placeholder="Digite el correo" onblur="validateCorreoM()">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Numero_telefonico">Digite el número telefónico que se desea modificar: </label>
                        <input class="form-control" type="text" name="Numero_telefonico" placeholder="Digite el número telefónico" onblur="validateNumeroTelefonoM()">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Direccion">Digite la dirección que se desea modificar: </label>
                        <input class="form-control" type="text" name="Direccion" placeholder="Digite la dirección">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label" for="Imagen">Suba la imagen que se desea modificar: </label>
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
    <script src="js/ValidacionClientes.js"></script>
    
<?php
include "include/templates/footer.php";
?>

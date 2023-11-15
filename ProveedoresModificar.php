<?php
if (isset($_POST['modificar'])) {
    $id_proveedor = $_POST['id_proveedor'];
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $correo = $_POST['Correo'];
    $id_ingrediente = $_POST['id_ingrediente'];
    $estado = $_POST['Estado'];
    $imagen = $_POST['Imagen'];

    include('DAL/conexion.php');
    $conexion = Conecta();
    echo $id_proveedor = $_POST['id_proveedor'];;
    $sql = "UPDATE SweetSeasons.proveedores SET Nombre = '$nombre', Primer_apellido = '$primer_apellido', Segundo_apellido = '$segundo_apellido', Numero_telefonico = '$numero_telefonico', Correo = '$correo', id_ingrediente = '$id_ingrediente', Estado = '$estado', ruta_imagen = '$imagen' WHERE id_proveedor = '$id_proveedor'";

    $result_update = mysqli_query($conexion, $sql);

    if ($result_update) {
        echo "Registro modificado con éxito.";
        header('Location: Proveedores.php');
        exit();
    } else {
        echo "Error al modificar el registro: "  . mysqli_error($conexion);
    }
}
?>

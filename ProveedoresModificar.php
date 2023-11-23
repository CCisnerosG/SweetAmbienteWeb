<?php
if (isset($_POST['modificar'])) {
    $id_proveedor = $_POST['proveedor'];
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $correo = $_POST['Correo'];
    $estado = $_POST['Estado'];
    $imagen = 'image/proveedores/' . $_POST['Imagen'];

    include('DAL/conexion.php');
    $conexion = Conecta();
    
    $sql = "UPDATE SweetSeasons.proveedores SET Nombre = '$nombre', Primer_apellido = '$primer_apellido', Segundo_apellido = '$segundo_apellido', Numero_telefonico = '$numero_telefonico', Correo = '$correo', Estado = '$estado', ruta_imagen = '$imagen' WHERE id_proveedor = '$id_proveedor'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "<script>alert('Registro modificado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al modificar el registro: " . mysqli_error($conexion) . "');</script>";
    }

    header("refresh:0.5;url=Proveedores.php");
}
?>

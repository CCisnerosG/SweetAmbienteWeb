<?php
if (isset($_POST['modificar'])) {
    $id_cliente = $_POST['cliente'];
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $correo = $_POST['Correo'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $direccion = $_POST['Direccion'];
    $imagen = 'image/clientes/' . $_POST['Imagen'];
    
    include('DAL/conexion.php');
    $conexion = Conecta();
    
    $sql = "UPDATE SweetSeasons.clientes SET Nombre = '$nombre', Primer_apellido = '$primer_apellido', Segundo_apellido = '$segundo_apellido', Correo = '$correo', Numero_telefonico = '$numero_telefonico', Direccion = '$direccion', ruta_imagen = '$imagen' WHERE id_cliente = '$id_cliente'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "<script>alert('Registro modificado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al modificar el registro: " . mysqli_error($conexion) . "');</script>";
    }

    header("refresh:0.5;url=Clientes.php");
}
?>

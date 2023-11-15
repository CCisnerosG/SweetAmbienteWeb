<?php
if (isset($_POST['modificar'])) {
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $correo = $_POST['Correo'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $direccion = $_POST['Direccion'];
    $imagen = $_POST['Imagen'];
    
    include('DAL/conexion.php');
    $conexion = Conecta();
    
    $sql = "UPDATE SweetSeasons.clientes SET Nombre = '$nombre', Primer_apellido = '$primer_apellido', Segundo_apellido = '$segundo_apellido', Correo = '$correo', Numero_telefonico = '$numero_telefonico', Direccion = '$direccion', ruta_imagen = '$imagen' WHERE id_cliente = '$id_cliente'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "Registro modificado con éxito.";
        header('Location: Clientes.php');
        exit();
    } else {
        echo "Error al modificar el registro: "  . mysqli_error($conexion);
    }
}
?>

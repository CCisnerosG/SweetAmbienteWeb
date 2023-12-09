<?php
if (isset($_POST['modificar'])) {
    $id_proveedor = $_POST['proveedor'];
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $correo = $_POST['Correo'];
    $estado = $_POST['Estado'];

    if(isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0){
        $imagen = $_FILES['Imagen']['name'];
        $ruta_imagen = 'image/proveedores/' . $imagen;

        move_uploaded_file($_FILES['Imagen']['tmp_name'], $ruta_imagen);
    } else {
        $imagen = '';
        $ruta_imagen = '';
    }
    
    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "UPDATE SweetSeasons.proveedores SET Nombre = '$nombre', Primer_apellido = '$primer_apellido', 
            Segundo_apellido = '$segundo_apellido', Numero_telefonico = '$numero_telefonico', 
            Correo = '$correo', Estado = '$estado', ruta_imagen = '$ruta_imagen' 
            WHERE id_proveedor = '$id_proveedor'";

    $result_update = mysqli_query($conexion, $sql); 

    if ($result_update) {
        echo "<script>alert('Proveedor modificado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al modificar el proveedor: " . mysqli_error($conexion) . "');</script>";
    }
    header("refresh:0.5;url=Proveedores.php");
}
?>

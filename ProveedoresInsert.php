<?php
if(isset($_POST['agregar'])){
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $correo = $_POST['Correo'];
    $id_ingrediente = $_POST['id_ingrediente'];
    $estado = $_POST['Estado'];

    $nombre_temporal = $_FILES['Imagen']['tmp_name'];
        $nombre_img = $_FILES['Imagen']['name'];
        move_uploaded_file($nombre_temporal, 'image/proveedores/' . $nombre_img);

        $ruta_imagen = 'image/proveedores/' . $nombre_img;
    

    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "INSERT INTO SweetSeasons.proveedores (Nombre, Primer_apellido, Segundo_apellido, Numero_telefonico, Correo, id_ingrediente, Estado, ruta_imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssss", $nombre, $primer_apellido, $segundo_apellido, $numero_telefonico, $correo, $id_ingrediente, $estado, $ruta_imagen);

    if ($stmt->execute()) {
        echo "<script>alert('Registro agregado con éxito.');</script>";
    } else {
        echo "<script>alert('Error al agregar el proveedor: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conexion->close();

    header('refresh:0.5;url=Proveedores.php'); 
}
?>

<?php
if(isset($_POST['agregar'])){
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

    $sql = "INSERT INTO SweetSeasons.proveedores (Nombre, Primer_apellido, Segundo_apellido, Numero_telefonico, Correo, id_ingrediente, Estado, ruta_imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssss", $nombre, $primer_apellido, $segundo_apellido, $numero_telefonico, $correo, $id_ingrediente, $estado, $imagen);

    if ($stmt->execute()) {
        echo "Se han ingresado correctamente los datos";
    } else {
        echo "Error al ingresar los datos: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();

    header('Location: Proveedores.php'); 
}
?>

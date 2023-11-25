<?php
if(isset($_POST['agregar'])){
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $correo = $_POST['Correo'];
    $id_ingrediente = $_POST['id_ingrediente'];
    $estado = $_POST['Estado'];

    //x---------------------COD PARA SUBIR CUALQUIER IMAGEN DESDE LOS ARCHIVOS DE COMPU-----------------------------------------
    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    // Verifica si se ha subido un archivo
    if(isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0){
        $imagen = $_FILES['Imagen']['name'];
        $ruta_imagen = 'image/proveedores/' . $imagen;

        // Mueve el archivo a la ruta deseada
        move_uploaded_file($_FILES['Imagen']['tmp_name'], $ruta_imagen);
    } else {
        // Manejar el caso en que no se haya subido una imagen
        $imagen = '';
        $ruta_imagen = '';
    }

    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
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

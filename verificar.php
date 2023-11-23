<?php
session_start();

$usuarios = [
    'usuario1' => 'clave1',  // Usuario y contraseña de ejemplo
    // Agrega más usuarios según sea necesario
];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $contrasena) {
    $_SESSION['usuario'] = $usuario;
    header("Location: Inicio.php");
} else {
    echo "Credenciales incorrectas. <a href='InicioSesion.html'>Volver</a>";
}
?>

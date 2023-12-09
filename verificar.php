<?php
session_start();

$usuarios = [
    'usuario1@gmail.com' => 'clave1', 
];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $contrasena) {
    $_SESSION['usuario'] = $usuario;
    header("Location: http://localhost:3000//Inicio.php"); 
} else {
    echo "Credenciales incorrectas. <a href='http://localhost:3000//InicioSesion.html'>Volver</a>"; 
}
?>

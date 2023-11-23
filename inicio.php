<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: InicioSesion.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
</head>
<body>

<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
<p><a href="cerrar_sesion.php">Cerrar sesión</a></p>

</body>
</html>

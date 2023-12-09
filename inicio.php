<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: InicioSesion.html");
    exit();
}

// Supongamos que tienes información del usuario almacenada en la sesión, 
// como el nombre, el correo y la foto de perfil. Ajusta esto según tu implementación.
$nombreUsuario = isset($_SESSION['nombre_usuario']) ? $_SESSION['Dueña de la Tienda'] : '';
$correoUsuario = isset($_SESSION['correo_usuario']) ? $_SESSION['usuario1@gmail.com'] : '';
$fotoUsuario = isset($_SESSION['foto_usuario']) ? $_SESSION['https://www.lollipopcakesupplies.com.au/cms/image/image/id/11541/aspect/4/size/11/cakers-kit.jpg'] : ''; // Esto puede ser una ruta a la imagen.
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Página de Inicio">
    <title>Página de Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="style/styles.css">
    <link rel="stylesheet" href="style/styles.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" crossorigin="anonymous">

    <link rel="preload" href="style/normalize.css">
    <link rel="stylesheet" href="style/normalize.css">
</head>

<body>

    <header class="head">
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #F5C8DA;">
            <div class="container">
                <a class="navbar-brand MenuText" href="index.html">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars" style="color: #4F260A;"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page"
                                style="font-family: 'Inter', sans-serif; color: #4F260A;"
                                href="Productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: 'Inter', sans-serif; color: #4F260A;"
                                href="Categorias.php">Categoría de productos</a>
                        </li>
                        <a class="nav-link" style="font-family: 'Inter', sans-serif; color: #4F260A;"
                            href="Ventas.php">Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: 'Inter', sans-serif; color: #4F260A;"
                                href="Compras.php">Compras</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" style="font-family: 'Inter', sans-serif; color: #4F260A;"
                                href="Ingredientes.php">Ingredientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: 'Inter', sans-serif; color: #4F260A;"
                                href="Proveedores.php">Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-family: 'Inter', sans-serif; color: #4F260A;"
                                href="Clientes.php">Clientes</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link pe-3" href="Cerrar_sesion.php">
                                <i class="fa-solid fa-sign-out-alt" style="color: #4F260A;"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-4 ">
                    <div class="imagen-redonda shadow-sm">
                        <img src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71ikMYA+TAS._AC_SX679_.jpg" alt="Foto perfil">
                    </div>
                </div>
                <div class="col-6 ">
                <h2 class="loginTitle" style="margin-bottom: 2rem;">Bienvenida, </h2>
                    <div class="card" style="border: 0; border-radius: 1rem; background-color: #FBD7E6;">
                        
                        <form class="card-body p-5 text-center" action="verificar.php" method="post" onsubmit="return validateFormU() && validateForm()">
                            <div class="mb-md-5 mt-md-4">
                                <h3 class="loginTitle" style="margin-bottom: 1rem;">Datos del usuario</h3>
                                <p class="text_label" >Nombre: Katherine Cisneros </p>
                                <hr>
                                <p class="text_label">Correo: usuario1@gmail.com </p>
                                <hr>
                                <p class="text_label">Telefono: 8912 3456 </p>
                                <hr>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/ValidacionInicioSesion.js"></script>

</body>

</html>

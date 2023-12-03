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
                        <!-- Agrega aquí tus elementos del menú según la estructura proporcionada -->
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
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-black" style="border: 0; border-radius: 1rem; background-color: #FBD7E6;">
                        <!-- ... (tu código HTML para el formulario de inicio de sesión) ... -->
                        <form class="card-body p-5 text-center" action="verificar.php" method="post" onsubmit="return validateFormU() && validateForm()">
                            <div class="mb-md-5 mt-md-4">
                                <h2 class="loginTitle" style="margin: 1rem;">Perfil de Usuario</h2>
                                <img src="<?php echo $fotoUsuario; ?>" alt="Foto de perfil" style="border-radius: 50%; max-width: 100px; margin: 1rem;">
                                <p>Nombre: <?php echo $nombreUsuario; ?></p>
                                <p>Correo: <?php echo $correoUsuario; ?></p>
                                <!-- ... (código HTML para el resto del formulario) ... -->
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

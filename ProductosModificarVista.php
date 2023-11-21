<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Pagina Inicial" content="Sweet Seasons" />
    <meta name="Keywords" content="pasteles, cupcakes, postres, galletas, casas de" />
    <title>Sweet Seasons</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Mountains+of+Christmas:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="style/styles.css">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <header class="head">
        <nav>
            <div>
                <ul class="MenuList">
                    <li class="ItemMenu"><a class="MenuText" href="index.html">Inicio </a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Productos.php">Productos</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Categorias.php">Categoría de productos</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="">Ventas </a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="">Compras</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Ingredientes.php">Ingredientes</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Proveedores.php">Proveedores</a> </li>
                    <li class="ItemMenu"><a class="MenuLink" href="Clientes.php">Clientes</a> </li>
                </ul>
                
            </div>
        </nav>
    </header>
    <br><br><br><br>
    <h3 class="h3">Modificar Productos</h3>
    <section>
        <form method="post" action="ProductosModificar.php">
            <label for="producto">Seleccione el producto que se desea modificar: </label>
            <select name="producto">
            <?php
                include('DAL/conexion.php');
                $conexion = Conecta();
                
                $query = "SELECT id_producto, Nombre FROM SweetSeasons.Productos";
                $result = mysqli_query($conexion, $query);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"" . $row['id_producto'] . "\">" . $row['Nombre'] . "</option>";
                    }
                } else {
                    echo "<option value=\"\">Error al obtener productos</option>";
                }

                mysqli_close($conexion);
            ?>

            </select>
            <br>
            <br>
            <label for="Nombre">Digite el nombre que se desea modificar: </label>
            <input type="text" name="Nombre" placeholder="Digite el nombre">
            <br>
            <br>
            <label for="categoria">Seleccione la categoria que se desea elegir: </label>
            <select name="categoria">
                <?php
                    
                    $conexion = Conecta();
                    
                    $query = "SELECT id_categoria, Nombre FROM SweetSeasons.categoria";
                    $result = mysqli_query($conexion, $query);
    
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"" . $row['id_categoria'] . "\">" . $row['Nombre'] . "</option>";
                        }
                    } else {
                        echo "<option value=\"\">Error al obtener las categorías</option>";
                    }
    
                    mysqli_close($conexion);
                ?>
            </select>
            <br>
            <br>
            <label for="Cantidad">Digite la Cantidad que se desea modificar: </label>
            <input type="number" name="Cantidad" placeholder="Digite la cantidad de productos">
            <br>
            <br>
            <label for="Descripcion">Digite la Descripcion que se desea modificar: </label>
            <input type="text" name="Descripcion" placeholder="Digite la descripción del producto">
            <br>
            <br>
            <label for="Tamano">Digite el Tamaño que se desea modificar: </label>
                <select name="Tamano">
                    <option value='S'>S</option>
                    <option value='M'>M</option>
                    <option value='L'>L</option>
                </select>
            <br>
            <br>
            <label for="Precio">Digite el Precio que se desea modificar: </label>
            <input type="number" name="Precio" placeholder="Digite el precio del producto">
            <br>
            <br>
            <label for="Imagen">Suba la imagen que se desea modificar: </label>
            <input lass="input" type="file" name="Imagen" placeholder="">
            <br>
            <br>
            <input type="submit" name="modificar" value="Modificar">
        </form>
    </section>

    <footer class="footer">
        <nav>
            <div>
                <p class="FooterText">Sweet Seasons</p>
            </div>
        </nav>
    </footer>
</body>
</html>
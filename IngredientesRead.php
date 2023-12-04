<?php
//funcion para traer los datos de Ingredientes ingresados en la BD

    include('DAL/conexion.php');

    $conexion = Conecta();

    $query = "SELECT id_ingrediente, Nombre, Unidad_medida, Precio, id_proveedor, ruta_imagen FROM SweetSeasons.ingredientes";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '          <div class="col-md-4">';
        echo '            <div class="card mb-4 shadow-sm">';
        echo '              <img class="card-text img_ingredientes" src="' . $row['ruta_imagen'] . '">';
        echo '              <div class="card-body" style="text-align: center;">';
        echo '                <p class="card-text title_ingredientes"> ' . $row['Nombre'] . '</p>';
        echo '                <p class="card-text text_ingredientes"><strong>Descripción:</strong> ' . $row['Unidad_medida'] . '</p>';
        echo '                <p class="card-text text_ingredientes"><strong>Precio:</strong> ' . $row['Precio'] . '</p>';
        echo '                <div class="d-flex justify-content-between align-items-center">';
        echo '                  <div class="btn-group" style="margin: 0 auto;">';
        if (isset($_SESSION['usuario'])) {
        echo '                    <form method="post" action="IngredientesDelete.php">';
        echo '                      <input type="hidden" name="id_ingrediente" value="' . $row['id_ingrediente'] . '">';
        echo '                      <button class="btn_Ingredientes" type="submit" name="eliminarIngredientes">Eliminar</button>';
        echo '                    </form>';
        }
        echo '                  </div>';
        echo '                </div>';
        echo '              </div>';
        echo '            </div>';
        echo '          </div>';
    }   
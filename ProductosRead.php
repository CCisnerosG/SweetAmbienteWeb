<?php

include('DAL/conexion.php');
$conexion = Conecta();

$query = "SELECT id_producto, Nombre, id_categoria, Cantidad, Descripcion, Tamano, Precio,ruta_imagen FROM SweetSeasons.Productos";
$result = mysqli_query($conexion, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '          <div class="col-md-4">';
    echo '            <div class="card mb-4 shadow-sm">';
    echo '              <img class="card-text img_ingredientes" src="' . $row['ruta_imagen'] . '">';
    echo '              <div class="card-body" style="text-align: center;">';
    echo '                <p class="card-text title_ingredientes"> ' . $row['Nombre'] . '</p>';
    echo '                <p class="card-text text_ingredientes"><strong>Descripción:</strong> ' . $row['Descripcion'] . '</p>';
    echo '                <p class="card-text text_ingredientes"><strong>Cantidad:</strong> ' . $row['Cantidad'] . '</p>';
    echo '                <p class="card-text text_ingredientes"><strong>Tamaño:</strong> ' . $row['Tamano'] . '</p>';
    echo '                <p class="card-text text_ingredientes"><strong>Precio:</strong> ' . $row['Precio'] . '</p>';
    echo '                <div class="d-flex justify-content-between align-items-center">';
    echo '                  <div class="btn-group" style="margin: 0 auto;">';
    echo '                    <form method ="post" action="ProductosDelete.php">';      
    echo '                      <input type="hidden" name="id_producto" value="' . $row['id_producto'] . '">';
    echo '                      <button class="btn_Ingredientes" type="submit" name="eliminar">Eliminar</button>';
    echo '                    </form>';
    echo '                  </div>';
    echo '                </div>';
    echo '              </div>';
    echo '            </div>';
    echo '          </div>';
    

}  

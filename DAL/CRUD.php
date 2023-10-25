<?
require_once "conexion.php";

function getArray($sql) {
    try {
        $oConexion = Conecta();

        if(mysqli_set_charset($oConexion, "utf8")){
            
            if(!$result = mysqli_query($oConexion,$sql )) die();
            $retorno = array();

            while ($row = mysqli_fetch_array($result)) {
                $retorno[] = $row;
            }
        }

    } catch (\Throwable $th) {
        echo $th;
    }finally{
        Desconecta($oConexion);
    }
    return $retorno;    
}


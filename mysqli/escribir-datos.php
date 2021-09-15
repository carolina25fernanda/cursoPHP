<?php

$conexion = new mysqli('localhost', 'root','','practico');

if ($conexion -> connect_errno){

    die('Hubo un problema');

}else{

    $sql = "INSERT INTO  usuario(idUsuario, nombre) VALUES (null,'Carlos')";
    $conexion -> query($sql);

   if($conexion->affected_rows >= 1){

    echo "Filas agregadas".$conexion->affected_rows;
   }
}

?>
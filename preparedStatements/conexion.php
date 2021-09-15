<?php

$conexion = new mysqli('localhost', 'root','','practico');

if ($conexion -> connect_errno){

    die('Hubo un problema');

}else{

    $statement = $conexion->prepare("INSERT INTO  usuario(idUsuario,nombre) Values(?,?)");
    $statement->bind_param('is', $idUsuario,$nombre); //la s significa string
    $idUsuario = null;


    if(isset($_GET['nombre'])){

    $nombre = $_GET['nombre'];
    }
    
    $statement->execute();
    


    if($conexion->affected_rows >= 1){

        echo "Filas agregadas: ".$conexion->affected_rows;
    }else{

        echo"No se agregó nada";
    }


    
}

?>
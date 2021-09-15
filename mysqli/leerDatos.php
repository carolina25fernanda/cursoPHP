<?php

$conexion = new mysqli('localhost', 'root','','practico');

if ($conexion -> connect_errno){

    die('Hubo un problema');

}else{

    $sql = "SELECT * FROM  usuarios";
    $resultado = $conexion -> query($sql);

    if($resultado ->num_rows){

        while($fila = $resultado-> fetch_assoc()){

            echo $fila['idUsuario'].'-'.$fila['nombre'].'<br >';
        }
    }else{

        echo 'No hay datos';
    }
}

?>
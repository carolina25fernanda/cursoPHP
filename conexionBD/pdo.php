<?php


try{

    $conexion = new PDO('mysql:host=localhost;dbname=practico','root','');

    //metodo query
    /*
    $resultados = $conexion -> query("SELECT * FROM usuario");


    foreach($resultados as $fila){

        print_r($fila);
    }

    */

    //Prepared Statements

    $statement = $conexion  -> prepare("SELECT * FROM usuario");
    $statement ->execute();


}catch(PDOException $e){

echo "Error: ".$e->getMessage();

}
?>
<?php

//print_r ($_POST);

if($_POST) {

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$anio = $_POST['anio'];
$terminos = $_POST['terminos'];

echo 'Hola, '.$nombre. ' eres '.$sexo;

}else{

    header('Location: index.php');
}
/*
if($_GET) {

    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $anio = $_GET['anio'];
    $terminos = $_GET['terminos'];
    
    echo 'Hola, '.$nombre. ' eres '.$sexo;
    
    }else{
    
        header('Location: index.php');
    }

    */
?>
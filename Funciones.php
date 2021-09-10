<?php

function saludos(){

    echo "Saludo! ";
}

saludos();

function sumar($var1, $var2){

    $resultado = $var1 + $var2;
    return $resultado;
}

$resultado = sumar(10,20);
//echo $resultado;

function areaTriangulo($base, $altura){

    $resultado = ($base * $altura )/ 2;
    return $resultado;
}

$resultado = areaTriangulo(3,5);
echo  " Area ".$resultado;


//funciones para cadena de texto 

$texto = 'Hola';

echo htmlspecialchars($texto);
echo trim ($texto);
echo strlen($texto);
echo substr($texto, 1,2);
echo strtoupper ($texto);
echo strtolower($texto);
echo strpos($texto,'H');

//funciones para arreglos

$amigo = array ('telefono' => 123456789, 'edad' =>23, 'pais'=> 'Chile');

extract ($amigo);

//array_pop 
//join 
//array_reverse  para invertir 
?>
<?php

echo "Hola Mundo";

//echo noa sirve para mostrar informacion en pantalla

# otro comentario 

/*
 o así comentar
*/

//variables 

//Cadena de texto
$nombre = "Carolina";
echo $nombre;
//entero
$numero = 7;
echo $numero;
//Double 
$numero_decimal = 7.7;
echo $numero_decimal;
//Boolean    verdadero o falso
$verdadero = false;
echo $verdadero;

// concatenar mensaje 
echo 'Hola, '.$nombre;

//tipo de dato de una variable
echo gettype($nombre);

//constantes
define('PI',3.14); //nombre constante y valor y no se pueden sobrecribir




?>


<!Doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title> Documento </title>
</head> 
<body>
    <h1> <?php echo "Hola  Mundo"; ?> </h1>
</body>
</html>
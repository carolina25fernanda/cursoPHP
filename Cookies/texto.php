<?php

$tamaño = $_COOKIE['font-size'];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=" UTF-8">
        <title>Texto</title>
        <style> 
        p{
            font-size: <?php echo $tamaño  ?>;
        }
    </style>
    </head>
    <body>
        <h4>Hola, aqui el texto que necesitamos </h4>
    </body>
</html>
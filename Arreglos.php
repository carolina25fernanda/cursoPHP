<?php

$meses = array('enero','febrero','marzo','abril','mayo',
               'junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

//sort($meses); //ordena por orden alfebetico
//rsort($meses) //ordena a la inversa
?>

<!Doctype html>
<html lang = "en">
<head>
 <meta charset="UTF-8">
 <title>Meses del año </title>
</head>
<body>
 <h1>Meses del año </h1>
 <u1>
    <?php
     
     foreach($meses as $mes){
         echo '<li>'. $mes. '</li>';
     }


   ?>
</u1>
</body>

</hml>




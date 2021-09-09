<?php

$meses = array('enero','febrero','marzo','abril','mayo',
               'junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
               
               
        


?>

<!Doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title> Ciclo Foreach </title>
</head> 
<body>
    <h1> Meses </h1>
    <u1>
        <?php

          foreach($meses as $mes ){  //se guarda temporalmente em $mes
               
            echo'<li>'  .$mes. '</li>';
          }
?>
</u1>
</body>
</html>
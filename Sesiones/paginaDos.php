<?php

session_start();

if($_SESSION){

    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola, $nombre</h1>";
}else{
    echo "No has iniciado sesión";
}


?>

<!Doctype html>
<html lang = "en">
    <head>
        <meta charset = "UTF_8">
        <title>Pagina 2 </title>
    </head>
    <body>
    
    <a href="cerrarSesion.php">Cerrar Sesión</a>
   
    </body>
</html>
<?php

$errores = '';

if(isset($_POST['submit'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (!empty($nombre)){

       // $nombre = trim($nombre); //quita espaciados al inicio y al final
       // $nombre = htmlspecialchars($nombre); //convierte caracteres en html entidades
       // $nombre = stripslashes($nombre); //remueve simbolos 

        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //remueve los signos para q solo sea una cadena de texto ej: <h1>Caro</h1>   == Caro
        
    }else{

        $errores .= "Agrega Nombre";
    }

    if (!empty($correo)){

 
         $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); //remueve los signos para q solo sea una cadena de texto ej: <h1>Caro</h1>   == Caro
         
         if (!filter_var($correo,FILTER_VALIDATE_EMAIL)){

            $errores = "Ingresa un Email Valido";
         }
     }else{
 
         $errores .= " Agrega Correo";
     }
    //echo "Tu nombre es: $nombre <br />";
    //echo "Tu correo es: $correo <br />";
}

?>

<!Doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Formulario</title>
    <style> .error{color:red;} </style>
</head>
<body>
    <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <input type = "text" name="nombre" placeholder= "nombre">
        <input type="email" name="correo" placeholder= "correo">

        <?php if (!empty($errores)): ?>
             <div class = "error"><?php echo $errores ?></div>
            <?php endif;   ?>
        <input type ="submit" name="submit">
    </form>
</body>
</html>
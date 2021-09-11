<?php

$errores = '';
$enviado = '';

if(isset($_POST['submit'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre)){

        $nombre = trim($nombre);
        $nombre = filter_var($nombre.FILTER_SANITIZE_STRING);
        
    }else{

        $errores .= "Porfavor, ingrese un nombre <br />";
    }

    if(!empty($correo)){

        $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){

            $errores .= 'Porfavor, ingrese un correo valido <br />';
        }

        } else{
            
            $errores .= 'Porfavor, ingrese un correo  <br />';
        }
        
    if(!empty($mensaje)){

            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripslashes($mensaje);
        }else{

            $errores.= "Porfavor, ingrese un mensaje";
        }

    if(!$errores){

        $enviar_a = 'caro@gmail.com';
        $asunto = 'Correo enviado desde esta pagina';
        $mensaje_preparado = "De:  $nombre\n";
        $mensaje_preparado.= "Correo: $correo\n";
        $mensaje_preparado = "Mensaje: ".$mensaje;

        //mail($enviar_a,$asunto,$mensaje_preparado);
       $enviado = true;
    }




    }


require 'vistas.php';


?>
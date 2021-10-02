<!DOCTYPE html>
<html lang= "en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar Sesión</title>
    </head>
    <body>
         <div class="contenedor">
             <h1 class="titulo">Iniciar Sesión</h1>
             <hr class="border">
             <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" class="formulario" name="login">
             <div class="form-group">
                 <i class="icono izquierda fas fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            
             <div class="form-group">
                 <i class="icono izquierda fas fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
                 <i class="submit-btn fas fa-arrow-right" onclick="login.submit()"></i>
             </div>
             <?php if(!empty($errores)) : ?>
             <div class ="error">
                 <ul>
             <?php  echo $errores; ?>
                 </ul>
             </div>
             <?php endif; ?>
            </form>
           <p class= "text-registro">
               ¿Aun no tienes cuenta?
               <a href="registro.php">Registrate</a>
           </p>
        
         </div>
    </body>
</html>
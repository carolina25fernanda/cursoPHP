<?php

if ($_POST){
    echo $_POST['nombre'];
}


?>

<!Doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form action = " <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method = "post">
        <input type = "text" placeholder = "Nombre:" name = "nombre" >
        <br>
        <label for = "Hombre">Hombre </label>
        <input type= "radio" name= "sexo" value="Hombre"  id = " Hombre">

        <label for = "Mujer">Mujer </label>
        <input type= "radio" name= "sexo" value="Mujer"  id = " Mujer">
    
        <br>
        <select name= "anio" id= "anio">
             <option value= "2000">2000</option>
             <option value= "2001">2001</option>
             <option value= "2002">2002</option>
             <option value= "2003">2003</option>
             <option value= "2004">2004</option>
       </select>

       <br>
       <label for = "terminos">Acepta los terminos? </label>
       <input type = "checkbox" name= "terminos" id="terminos" value= "ok">
  
       <br>
        <input type ="submit" value="Enviar">
    </form>
</body>
</html>
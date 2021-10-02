<?php
session_start();

if(isset($_SESSION['usuario'])){

    require 'views/contenido.views.php';
}else{
    header('Location: login.php');
}

require 'views/contenido.views.php';

?>
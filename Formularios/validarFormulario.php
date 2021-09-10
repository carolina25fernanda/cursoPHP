<?php

/*
if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    echo "Se enviaron por get";
}else{

    echo "Se enviaron por post";
}

*/

if(isset($_POST['submit']) ){

    echo" se han enviado correctamente";
    print_r($_POST['submit']);
}
?>
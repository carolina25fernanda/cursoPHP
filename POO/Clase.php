<?php


class Clase {


    public $nombre;
    public $edad;
    public $pais;

    function __construct  ($nombre,$edad,$pais){

        $this->nombre= $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }


    public function mostrarInformacion(){

        echo "Nombre: ".$this->nombre;
        echo "<br  />";
        echo "Edad: ".$this->edad;
        echo "<br  />";
        echo "Pais: ".$this->pais;
        echo "<br  />";
    }
}



$persona = new Clase("Carolina",23,"Chile");
//$persona->nombre = "Carolina\n";
//$persona->edad = "23\n";
//$persona->pais = "Chile\n";

$persona->mostrarInformacion();


?>
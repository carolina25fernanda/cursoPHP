<?php

class Estudiante {


    public $nombre;
    public $edad;
    public $pais;

    function __construct  ($nombre,$edad,$pais){

        $this->nombre= $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }


    public function mostrarInformacion(){

        return "Nombre: ".$this->nombre. " Edad: ".$this->edad. " Pais: ".$this->pais;
        
    }


}

class Carrera {


    public $nombre;
    public $duracion;
    public $universidad;

    function __construct  ($nombre,$duracion,$universidad){

        $this->nombre= $nombre;
        $this->duracion = $duracion;
        $this->universidad = $universidad;
    }


    public function mostrarInformacionCarrera(){

        return "Nombre: ".$this->nombre. " Edad: ".$this->duracion. " Universidad: ".$this->universidad;
        
    }


}

/*
$estudiante1 = new Estudiante ("Carolina", 23, "Chile");
echo $estudiante1 -> mostrarInformacion();
$estudiante1 = new Carrera("Informatica", "8 semestres", "Universidad del Biobio");
echo $estudiante1-> mostrarInformacionCarrera();
*/

/*
class Alumnos extends Estudiante  {

    function __construct(){

        parent::__construct( argumentos);
    }
    

}

*/

?>
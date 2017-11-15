<?php
trait Hola{
    public function Hola($nombre){
        echo "Hola $nombre";
    }
}

interface Humano {
    function setNombre ($nombre);
    function setApellido1 ($ape1);
    function setApellido2 ($ape2);
    
}


class Persona implements Humano{
    public $nombre;
    public $apellido1;
    public $apellido2;
    
     
    function __construct($nombre, $ape1, $ape2){
        echo "Objeto creado <br>";
        $this->nombre = $nombre;
        $this->apellido1 = $ape1;
        $this->apellido2 = $ape2;
    }
    
    function setNombre ($nombre){
        $this->nombre = $nombre;
    }
    function setApellido1 ($ape1){
        $this->apellido1 = $ape1;
    }
    function setApellido2 ($ape2){
        $this->apellido2 = $ape2;
    }
    
    function getNombre (){
        return $this->nombre;
    }

    function getDni (){
        return $this->dni;
    }
    
}

class PersonaEspaña extends Persona{
    public $documentos;
    use Hola;
    
    function setDocumento (Documento $documento){
        $this->documentos[]=$documento;
    }
    function getDocumento (){
        return $this->documentos;
    }
    function getApellidos (){
        return $this->apellido1. " ". $this->apellido2;
    }
    public static function comprobarDni($dni){
        echo "DNI correcto <br>";
        return true;
        
    }
    
}

class PersonaUSA extends Persona{
    function getApellidos (){
        return $this->apellido2. " ". $this->apellido1;
    }
}

class Dni implements Documento{
    private $dni;
    
    /*public function __construct($dni){
        $this->dni=$dni;
    }
    public function getDni(){
        return $this->dni;
    }*/
    public function setDocumento($documento){
        $this->dni = $documento;        
    }
    public function getDocumento(){
        return $this->dni;
    }
}

class Pasaporte implements Documento{
    private $pasaporte;
    
    /*public function __construct($pasaporte){
        $this->pasaporte=$pasaporte;
    }
    public function getPasaporte(){
        return $this->pasaporte;
    }*/
    public function setDocumento($documento){
        $this->pasaporte = $documento;
    }
    public function getDocumento(){
        return $this->pasaporte;
    }
    
    
}

class libroFamilia{
    private $libroFamilia;
    
    public function __construct($libro){
        $this->libroFamilia=$libro;
    }
    public function getlibroFamilia(){
        return $this->libroFamilia;
    }
    
}

interface Documento{
    public function setDocumento($documento);
    public function getDocumento();
    
}


?>



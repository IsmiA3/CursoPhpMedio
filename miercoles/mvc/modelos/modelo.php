<?php
class receta_modelo{
    protected  $servidor;
    protected  $base_datos;
    protected  $usuario;
    protected  $password;
    protected  $base_datos_PDO;
    
    function __construct($servidor, $base_datos, $usuario, $password){
        $this->servidor=$servidor;
        $this->base_datos=$base_datos;
        $this->usuario=$usuario;
        $this->password=$password;
    }
    
    public function conectar(){
        try {
            $this->base_datos_PDO=new PDO("mysql:host=$this->servidor;dbname=$this->base_datos",$this->usuario,$this->password);
            echo "CORRECTO";
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }    
    public function obtener_recetas(){
        $sql="SELECT * FROM recetas order by fecha";
        $sentencia = $this->base_datos_PDO->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

$prueba = new receta_modelo("localhost", "recetas", "alumno", "alumno");
$prueba->conectar();
var_dump($prueba->obtener_recetas());
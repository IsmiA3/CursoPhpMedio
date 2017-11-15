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
        $this->conectar();
    }
    
    public function conectar(){
        try {
            $this->base_datos_PDO=new PDO("mysql:host=$this->servidor;dbname=$this->base_datos",$this->usuario,$this->password); 
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
    public function obtener_receta($id){
        $sql="SELECT * FROM recetas where id=$id order by fecha";
        $sentencia = $this->base_datos_PDO->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}


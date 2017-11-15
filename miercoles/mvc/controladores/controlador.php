<?php
//Llamadas
//index.php?controlador=recetas&id=0
//index.php?controlador=recetas&id=1


class Controlador{
    protected $titulo;
    
    function __construct(){
        //echo "Soy el controlador";
        $this->titulo="Recetas de Cocina";
    }

    public function repartidor(){
        $this->recetas();        
    }
    
    public function recetas(){
        if ($_GET["id"]==0){
         $pagina = file_get_contents("vistas/defecto.php");
         $this->render_pagina($pagina);
        }else{
         $pagina = file_get_contents("vistas/receta.php");
         $this->render_pagina($pagina);
        }
    }
    public function obtener_recetas(){
        $receta = new receta_modelo("localhost", "recetas", "alumno", "alumno");
        
        $recetas = $receta->obtener_recetas();
        $resultado[0]="";
        $resultado[1]="";
        
        $i=0;
        foreach ($recetas as $linea_receta){
            $resultado[$i]=$resultado[$i]."<h4><a href='#'>$linea_receta[1]</a></h4><i>$linea_receta[2]</i>";
            if ($i==0) {
                $i=1;
            } else {$i=0;};
        }
        return $resultado;
    }
    public function obtener_receta($id){
        $receta = new receta_modelo("localhost", "recetas", "alumno", "alumno");
        $recetas = $receta->obtener_receta($id);
        $resultado="";
            //print_r($recetas);  
            echo $recetas[0][1];
        foreach ($recetas as $linea_receta){
            $resultado=$resultado."<h4><a href='#'>$linea_receta[1]</a></h4><i>$linea_receta[2]</i>";
            
        }
        
   
        return $resultado;
    }
    
    public function render_pagina($pagina){
        $pagina = preg_replace("/\#HEAD\#/ms", file_get_contents("vistas/head.php"),$pagina);
        $pagina = preg_replace("/\#TITLE\#/ms", $this->titulo, $pagina);
        $pagina = preg_replace("/\#MENU\#/ms", file_get_contents("vistas/menu.php"),$pagina);
        $pagina = preg_replace("/\#CARRUSEL\#/ms", file_get_contents("vistas/carrusel.php"),$pagina);
        $pagina = preg_replace("/\#RECETAS\#/ms", file_get_contents("vistas/recetas.php"),$pagina);
        $pagina = preg_replace("/\#CAPA_RECETA\#/ms", file_get_contents("vistas/capa_receta.php"),$pagina);
        if ($_GET["id"]!=0){
            $pagina = preg_replace("/\#RECETA\#/ms", $this->obtener_receta($_GET["id"]),$pagina);
        }
        //$pagina = preg_replace("/\#COL1\#/ms", file_get_contents("vistas/columna1.php"),$pagina);
        $pagina = preg_replace("/\#COL1\#/ms", $this->obtener_recetas()[0],$pagina);
        $pagina = preg_replace("/\#COL2\#/ms", $this->obtener_recetas()[1],$pagina);
        //$pagina = preg_replace("/\#COL2\#/ms", file_get_contents("vistas/columna2.php"),$pagina);
        $pagina = preg_replace("/\#PIE\#/ms", file_get_contents("vistas/pie.php"),$pagina);
        echo $pagina;
    }

    public function getTitulo(){
        return $this->titulo;
    }
}
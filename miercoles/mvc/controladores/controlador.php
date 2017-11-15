<?php

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
        $pagina = file_get_contents("vistas/defecto.php");
        $this->render_pagina($pagina);
    }
    
    public function render_pagina($pagina){
        $pagina = preg_replace("/\#HEAD\#/ms", file_get_contents("vistas/head.php"),$pagina);
        $pagina = preg_replace("/\#TITLE\#/ms", $this->titulo, $pagina);
        $pagina = preg_replace("/\#MENU\#/ms", file_get_contents("vistas/menu.php"),$pagina);
        $pagina = preg_replace("/\#CARRUSEL\#/ms", file_get_contents("vistas/carrusel.php"),$pagina);
        $pagina = preg_replace("/\#RECETAS\#/ms", file_get_contents("vistas/recetas.php"),$pagina);
        $pagina = preg_replace("/\#COL1\#/ms", file_get_contents("vistas/columna1.php"),$pagina);
        $pagina = preg_replace("/\#COL2\#/ms", file_get_contents("vistas/columna2.php"),$pagina);
        $pagina = preg_replace("/\#PIE\#/ms", file_get_contents("vistas/pie.php"),$pagina);
        echo $pagina;
    }

    public function getTitulo(){
        return $this->titulo;
    }
}
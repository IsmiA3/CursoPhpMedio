<?php
namespace App\Controller;

use App\Controller\AppController;


class TiposController extends AppController
{
    
    
    
    public function index()
    {
        $this->paginate=array ('maxLimit' => '2');
        
        $tipos = $this->Tipos->find('all');
        //$this->set('misTipos',$tipos);
        $tipos = $this->paginate();
        $this->set(compact('tipos'));
    }
    
   public function add()
    {
        $tipo = $this->Tipos->newEntity();
        $this->set(compact('tipo'));
    }
}
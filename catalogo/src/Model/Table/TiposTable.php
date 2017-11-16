<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TiposTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setTable('tipos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');
        
        $this->hasMany('Productos', [
            'foreingkey' => 'tipo_id'
        ]);
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $table = 'funcionario';
    protected $primaryKey = 'id';

    function venda(){
        return $this->hasMany('App\Venda', 'id_funcionario', 'id');
    }
}

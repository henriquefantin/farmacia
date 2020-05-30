<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';

    function vendas(){
        return $this->hasMany('App\Venda', 'id_cliente', 'id');
    }
}

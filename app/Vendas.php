<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $table = 'venda';
    protected $primaryKey = 'id';

    function funcionario(){
        return $this->belongsTo('App\Funcionario', 'id_funcionario', 'id');
    }
    function cliente(){
        return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
    }

    function produtos(){
        return $this->belongsToMany('App\Produto', 'produtos_vendas', 'id_venda', 'id_produto')->withPivot('id','quantidade', 'subtotal')->withTimestamps();
    }
}

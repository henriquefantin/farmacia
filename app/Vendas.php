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

    function produto(){
        return $this->belongsToMany('App\Produtos', 'item_venda', 'id_venda', 'id_produto')->withPivot('id','quantidade', 'valor_total')->withTimestamps();
    }
}

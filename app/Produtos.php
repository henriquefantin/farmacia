<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'id';

    function fornecedor(){
        return $this->belongsTo('App\Fornecedor', 'id_fornecedor', 'id');
    }

    function vendas(){
        return $this->belongsToMany('App\Venda', 'item_venda', 'id_produto', 'id_venda')->withPivot('quantidade', 'valor_total')->withTimestamps();
    }
}

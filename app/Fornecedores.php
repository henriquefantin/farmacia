<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{

	protected $table = 'fornecedor';
    protected $primaryKey = 'id';

    function produtos(){
        return $this->hasMany('App\Produto', 'id_fornecedor', 'id');
    }
}

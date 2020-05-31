<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Fornecedores;
use Auth;

class ProdutoController extends Controller
{
    function telaCadastro(){
        $fornecedor = Fornecedores::all();
        return view("cadastro_produto", ["fornecedor" => $fornecedor]);   
    }

    function adicionar(Request $req){       
        $id_fornecedor = $req->input('id_fornecedor');
        $descricao = $req->input('descricao');
        $nome = $req->input('nome');
        $valor_unitario = $req->input('valor_unitario');
        $unidade_venda = $req->input('unidade_venda');

        $produto = new Produtos();
        $produto->descricao = $descricao;
        $produto->nome = $nome;
        $produto->valor_unitario = $valor_unitario;
        $produto->unidade_venda = $unidade_venda;
        $produto->id_fornecedor = $id_fornecedor;

        if ($produto->save()){
            $msg = "$nome cadastrado com sucesso.";
        }else{
            $msg = "Produto não foi cadastrado.";
        }

        return view("retorno", [ "mensagem" => $msg ]);
    }

    function listar(){
        $produtos = Produtos::all();
        $fornecedor = Fornecedores::all();
        return view('listar_produtos', ['produtos' => $produtos,'fornecedor' => $fornecedor]);
    }
}

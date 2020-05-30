<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    function telaCadastro(){
         if(session()->has("login")){
            return view("cadastro_produto");
            }
        return redirect()->route('tela_login');
    }

    function adicionar(Request $req){
        if(session()->has("login")){
            $descricao = $req->input('descricao');
            $nome = $req->input('nome');
            $preco = $req->input('preco');
            $unidade_venda = $req->input('unidade_venda');

            $produto = new Produto();
            $produto->descricao = $descricao;
            $produto->nome = $nome;
            $produto->preco = $preco;
            $produto->unidade_venda = $unidade_venda;

            if ($produto->save()){
                $msg = "$nome cadastrado com sucesso.";
            }else{
                $msg = "Produto não foi cadastrado.";
            }

            return view("retorno", [ "mensagem" => $msg ]);
        }
        return redirect()->route('tela_login');
    }
}

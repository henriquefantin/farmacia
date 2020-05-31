<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedores;
use Auth;

class FornecedorController extends Controller
{
    function telaCadastro(){
        return view("cadastro_fornecedor");
    }

    function telaAlteracao($id){
        $fornecedor = Fornecedores::find($id);
        return view("tela_alterar_fornecedor", [ "f" => $fornecedor ]);
    }

    function alterar(Request $req, $id){
       
        $fornecedor = Fornecedores::find($id);

        $nome = $req->input('nome');
        $cpf = $req->input('cpf');
        $rg = $req->input('rg');
        $rua = $req->input('rua');
        $numero_casa = $req->input('numero_casa');
        $cidade = $req->input('cidade');
        $bairro = $req->input('bairro');
        $cep = $req->input('cep');
    	$estado = $req->input('estado');
        $numero_celular = $req->input('numero_celular');
        $email = $req->input('email');
        $estado_civil = $req->input('estado_civil');

        $fornecedor->nome = $nome;
        $fornecedor->cpf = $cpf;
        $fornecedor->rg = $rg;
        $fornecedor->rua = $rua;
        $fornecedor->numero_casa = $numero_casa;
        $fornecedor->cidade = $cidade;
        $fornecedor->bairro = $bairro;
        $fornecedor->cep = $cep;
        $fornecedor->estado = $estado;
        $fornecedor->numero_celular = $numero_celular;
        $fornecedor->email = $email;
        $fornecedor->estado_civil = $estado_civil;

        if ($fornecedor->save()){
            $msg = "Fornecedor $nome alterado com sucesso.";
        } else {
            $msg = "Fornecedor não foi alterado.";
        }

        return view("retorno", [ "mensagem" => $msg]);
        
    }

    function excluir($id){
        
        $fornecedor = Fornecedores::find($id);

        foreach ($fornecedor->vendas as $v){
            $v->delete();
        }

        if ($fornecedor->delete()){
            $msg = "Fornecedor $id excluído com sucesso.";
        } else {
            $msg = "Fornecedor não foi excluído.";
        }

        return view("retorno", [ "mensagem" => $msg]);
        
    }

    function adicionar(Request $req){
        
    	$rasao_social = $req->input('rasao_social');
        $nome_fantasia = $req->input('nome_fantasia');
        $cnpj = $req->input('cnpj');
        $inscricao_estadual = $req->input('inscricao_estadual');
        $rua = $req->input('rua');
        $numero_logradouro = $req->input('numero_logradouro');
        $cidade = $req->input('cidade');
        $bairro = $req->input('bairro');
        $cep = $req->input('cep');
    	$estado = $req->input('estado');
        $numero_celular = $req->input('numero_celular');
        $email = $req->input('email');
    
    	$fornecedor = new Fornecedores();
    	$fornecedor->rasao_social = $rasao_social;
        $fornecedor->nome_fantasia = $nome_fantasia;
        $fornecedor->cnpj = $cnpj;
        $fornecedor->inscricao_estadual = $inscricao_estadual;
        $fornecedor->rua = $rua;
        $fornecedor->numero_logradouro = $numero_logradouro;
        $fornecedor->cidade = $cidade;
        $fornecedor->bairro = $bairro;
        $fornecedor->cep = $cep;
        $fornecedor->estado = $estado;
        $fornecedor->numero_celular = $numero_celular;
        $fornecedor->email = $email;
    	
    	if ($fornecedor->save()){
    		$msg = "Fornecedor $rasao_social cadastrado com sucesso.";
    	}else{
    		$msg = "Fornecedor não foi cadastrado.";
    	}

    	return view("retorno", [ "mensagem" => $msg ]);
        
    }

    function listar(){    
        $fornecedor = Fornecedores::all();
        return view("listar_fornecedor", [ "fornecedor" => $fornecedor ]);
    }  
}

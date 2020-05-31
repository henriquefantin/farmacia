<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedores;
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
    
    	$fornecedor = new Clientes();
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
    		$msg = "Fornecedor $nome cadastrado com sucesso.";
    	}else{
    		$msg = "Fornecedor não foi cadastrado.";
    	}

    	return view("retorno", [ "mensagem" => $msg ]);
        
    }

    function listar(){    
            $cliente = Fornecedores::all();
            return view("listar_fornecedor", [ "us" => $fornecedor ]);
    }  
}

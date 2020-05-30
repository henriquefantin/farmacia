<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Auth;

class ClienteController extends Controller
{
    function telaCadastro(){
        return view("");
    }

    function telaAlteracao($id){
        $cliente = Cliente::find($id);
        return view("tela_alterar_cliente", [ "u" => $cliente ]);
    }

    function alterar(Request $req, $id){
       
        $cliente = Cliente::find($id);

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

        $cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->rg = $rg;
        $cliente->rua = $rua;
        $cliente->numero_casa = $numero_casa;
        $cliente->cidade = $cidade;
        $cliente->bairro = $bairro;
        $cliente->cep = $cep;
        $cliente->estado = $estado;
        $cliente->numero_celular = $numero_celular;
        $cliente->email = $email;
        $cliente->estado_civil = $estado_civil;

        if ($cliente->save()){
            $msg = "Cliente $nome alterado com sucesso.";
        } else {
            $msg = "Cliente não foi alterado.";
        }

        return view("retorno", [ "mensagem" => $msg]);
        
    }

    function excluir($id){
        
        $cliente = Cliente::find($id);

        foreach ($cliente->vendas as $v){
            $v->delete();
        }

        if ($cliente->delete()){
            $msg = "Cliente $id excluído com sucesso.";
        } else {
            $msg = "Cliente não foi excluído.";
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
    
    	$cliente = new Funcionario();
    	$cliente->nome = $nome;
        $cliente->cpf = $cpf;
        $cliente->rg = $rg;
        $cliente->rua = $rua;
        $cliente->numero_casa = $numero_casa;
        $cliente->cidade = $cidade;
        $cliente->bairro = $bairro;
        $cliente->cep = $cep;
        $cliente->estado = $estado;
        $cliente->numero_celular = $numero_celular;
        $cliente->email = $email;
        $cliente->estado_civil = $estado_civil;
    	
    	if ($cliente->save()){
    		$msg = "Usuário $nome cadastrado com sucesso.";
    	}else{
    		$msg = "Usuário não foi cadastrado.";
    	}

    	return view("retorno", [ "mensagem" => $msg ]);
        
    }

    function listar(){    
            $cliente = Cliente::all();
            return view("lista", [ "us" => $cliente ]);
    }    
}

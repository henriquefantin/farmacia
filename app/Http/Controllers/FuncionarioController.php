<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;
use Auth;

class FuncionarioController extends Controller
{
	function telaCadastro(){
        return view("cadastro_funcionario");
    }

    function telaAlteracao($id){
        $funcionario = Funcionarios::find($id);
        return view("tela_alterar_funcionario", [ "f" => $funcionario ]);
    }

    function alterar(Request $req, $id){
       
        $funcionario = Funcionarios::find($id);

        $$nome = $req->input('nome');
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

        $funcionario->nome = $nome;
        $funcionario->cpf = $cpf;
        $funcionario->rg = $rg;
        $funcionario->rua = $rua;
        $funcionario->numero_casa = $numero_casa;
        $funcionario->cidade = $cidade;
        $funcionario->bairro = $bairro;
        $funcionario->cep = $cep;
        $funcionario->estado = $estado;
        $funcionario->numero_celular = $numero_celular;
        $funcionario->email = $email;
        $funcionario->estado_civil = $estado_civil;

        if ($funcionario->save()){
            $msg = "Cliente $nome alterado com sucesso.";
        } else {
            $msg = "Cliente não foi alterado.";
        }

        return view("retorno", [ "mensagem" => $msg]);
        
    }

    function excluir($id){
        
        $funcionario = funcionarios::find($id);

        foreach ($funcionario->vendas as $v){
            $v->delete();
        }

        if ($funcionario->delete()){
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
    
    	$funcionario = new Funcionarios();
    	$funcionario->nome = $nome;
        $funcionario->cpf = $cpf;
        $funcionario->rg = $rg;
        $funcionario->rua = $rua;
        $funcionario->numero_casa = $numero_casa;
        $funcionario->cidade = $cidade;
        $funcionario->bairro = $bairro;
        $funcionario->cep = $cep;
        $funcionario->estado = $estado;
        $funcionario->numero_celular = $numero_celular;
        $funcionario->email = $email;
        $funcionario->estado_civil = $estado_civil;
    	
    	if ($funcionario->save()){
    		$msg = "Usuário $nome cadastrado com sucesso.";
    	}else{
    		$msg = "Usuário não foi cadastrado.";
    	}

    	return view("retorno", [ "mensagem" => $msg ]);
        
    }

    function listar(){    
            $funcionario = Funcionarios::all();
            return view("listar_funcionarios", [ "funcionario" => $funcionario ]);
    }    
}

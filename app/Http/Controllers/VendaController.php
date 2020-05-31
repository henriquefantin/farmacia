<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendas;
use App\Clientes;
use App\Produtos;
use App\Funcionarios;
use Auth;

class VendaController extends Controller
{
    function telaCadastroVendas(){
        $cliente = Clientes::all();
        $funcionario = Funcionarios::all();
        return view("venda_cliente", ["cliente" => $cliente, "funcionario" => $funcionario]);
    }

    function adicionar(Request $req){
        $id_cliente = $req->input('id_cliente');
        $id_funcionario = $req->input('id_funcionario');
    	$venda = new Vendas();
        $venda->valor_venda = 0;
        $venda->id_cliente = $id_cliente;
        $venda->id_funcionario = $id_funcionario;
    	
    	if ($venda->save()){
            $msg = "Venda adicionada com sucesso.";
        } else {
            $msg = "Venda não foi cadastrada.";
        }
        return redirect()->route('vendas_item_novo', ['id' => $venda->id]);
        
    }

    function listar(){      
        	$vendas = Vendas::all();
            return view('listar_vendas', [ 'venda' => $vendas ]);
    }

    function itensVenda($id){
        $venda = Vendas::find($id);
        return view('lista_itens_venda', ['venda' => $venda]);
    }

    function telaAdicionarItem($id){
        $venda = Vendas::find($id);
        $produto = Produtos::all();
        return view('itens_venda', ['venda' => $venda, 'produto' => $produto]);
    }

    function adicionarItem(Request $req, $id){
        $id_produto = $req->input('id_produto');
        $quantidade = $req->input('quantidade');
        $produto = Produtos::find($id_produto);
        $venda = Vendas::find($id);
        $subtotal = $produto->preco * $quantidade;

        $colunas_pivot = [
            'quantidade' => $quantidade,
            'subtotal' => $subtotal
        ];
        $venda->produto()->attach($produto->id, $colunas_pivot);
        $venda->valor_venda += $subtotal;
        $venda->save();

        return redirect()->route('vendas_item_novo', ['id' => $venda->id]);
    }

    function excluirItem($id, $idProduto){
        $venda = Vendas::find($id);
        $subtotal = 0;
        foreach ($venda->produto as $vp) {
            if($vp->id == $idProduto){
                $subtotal = $vp->pivot->subtotal;
                break;
            }
        }
        $venda->valor_venda = $venda->valor_venda - $
        $venda->save();
        $venda->produto()->datach($id_produto);

        return redirect()->rout('vendas_item_novo', ['id' => $id]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
	/* Cliente */
	Route::get('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente_add');
	Route::get('/cliente/cadastro', 'ClienteController@telaCadastro')->name('cadastro_cliente');
	Route::get('/cliente/listar', 'ClienteController@listar')->name('listar_cliente');

	/* Fornecedores */
	Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('fornecedor_add');
	Route::get('/fornecedor/cadastro', 'FornecedorController@telaCadastro')->name('cadastro_fornecedor');
	Route::get('/fornecedor/listar', 'FornecedorController@listar')->name('listar_fornecedor');

	/* Funcionario */
	Route::get('/funcionario/adicionar', 'FuncionarioController@adicionar')->name('funcionario_add');	
	Route::get('/funcionario/listar', 'FuncionarioController@listar')->name('listar_funcionarios');

	/* Vendas */
	Route::get('/venda/cadastro', 'VendaController@telaCadastro')->name('venda_cadastro');
	Route::post('/venda/adicionar', 'VendaController@adicionar')->name('venda_add');
	Route::get('/venda/{id}/itens/novo', 'VendaController@telaAdicionarItem')->name('vendas_item_novo');
	Route::post('/venda/{id}/itens/adicionar', 'VendaController@adicionarItem')->name('vendas_item_add');
	Route::get('/venda/{id}/itens/remover/{id_pivot}', 'VendaController@excluirItem')->name('vendas_item_delete');
	Route::get('/venda/{id}/itens', 'VendaController@itensVenda')->name('vendas_itens');
	Route::get('/venda/listar', 'VendaController@listar')->name('venda_listar');
	Route::get('/venda/usuario/{id}', 'VendaController@vendasPorUsuario')->name('vendas_usuario');
	
	/* Produtos */
	Route::get('/produto/cadastro', 'ProdutoController@telaCadastro')->name('produto_cadastro');
	Route::post('/produto/adicionar', 'ProdutoController@adicionar')->name('produto_add');
	Route::get('/produto/listar', 'ProdutoController@listar')->name('produtos_listar');

	Route::middleware(['admin'])->group(function(){
		/* Funcionario */
		Route::get('/funcionario/cadastro', 'FuncionarioController@telaCadastro')->name('cadastro_funcionario');	
		Route::get('/funcionario/excluir/{id}', 'FuncionarioController@excluir')->name('funcionario_delete');
		
	});

});

/* Login */
Route::get('/login', 'AppController@tela_login')->name('login');
Route::get('/logout', 'AppController@logout')->name('logout');
Route::post('/logar', 'AppController@login')->name('logar');

Auth::routes();



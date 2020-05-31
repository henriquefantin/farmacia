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


	/* Funcionario */
	Route::get('/funcionario/adicionar', 'FuncionarioController@adicionar')->name('funcionario_add');
	Route::get('/funcionario/cadastro', 'FuncionarioController@telaCadastro')->name('cadastro_funcionario');
	Route::get('/funcionario/listar', 'FuncionarioController@listar')->name('listar_funcionarios');
	Route::get('/funcionario/excluir/{id}', 'FuncionarioController@excluir')->name('funcionario_delete');

	Route::middleware(['admin'])->group(function(){
		/* Cliente */
		

		Route::get('/home', 'HomeController@index')->name('home');
		
	});

});


Auth::routes();



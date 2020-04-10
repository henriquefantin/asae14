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

/* Clientes */
Route::get('/cliente/cadastro', 'ClienteController@telaCadastro')->name('cliente_cadastro');
Route::get('/cliente/listar', 'ClienteController@listar')->name('listar');
Route::get('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente_add');
Route::post('/cliente/alterar/{id}', 'ClienteController@alterar')->name('cliente_alterar');
Route::get('/cliente/excluir/{id}', 'ClienteController@excluir')->name('cliente_delete');
Route::get('/cliente/alterar/{id}', 'ClienteController@telaAlteracao')->name('cliente_update');

/* Vendas */
Route::get('/cliente/cadastro_vendas/{id}', 'VendaController@telaCadastroVendas')->name('venda_cadastro');
Route::post('/cliente/adicionar_venda/{id}', 'VendaController@adicionar')->name('venda_add');
Route::get('/cliente/listar_vendas/{id}', 'VendaController@listar')->name('listar_vendas');

/* Cadastro Login */
Route::get('/tela_cadastro', 'AppController@tela_cadastro')->name('user_cadastro');
Route::post('/user/adicionar', 'AppController@adicionar')->name('user_add');

/* Login */
Route::get('/tela_login', 'AppController@tela_login')->name('tela_login');
Route::get('/logout', 'AppController@logout')->name('logout');
Route::post('/login', 'AppController@login')->name('logar');
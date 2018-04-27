<?php

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

Route::get('/', 'ProdutoController@lista');

//Auth
Auth::routes();

Route::get('/', 'HomeController@index');


//Login
//Route::get('/login', 'LoginController@login');


//Lista Todos os produtos
Route::get('/produtos', 'ProdutoController@lista');

//Lista detalhes de um produto em especifico
//Limita o input a dados numericos
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')
        ->where('id', '[0-9]+');

//Formulario para adicionar novo produto
Route::get('/produtos/novo', 'ProdutoController@novo');

//Rotina para gravar o produto
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

//Rotina para remover o produto
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

//Rotina para alterar o produto
Route::get('/produtos/altera/{id}', 'ProdutoController@altera')
        ->where('id', '[0-9]+');

//Rotina para alterar o produto
Route::post('/produtos/atualiza/{id}', 'ProdutoController@atualiza');



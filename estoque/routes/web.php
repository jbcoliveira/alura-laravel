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

Route::get('/', function () {
    //return view('welcome');
    return '<h1>Página Inicial</h1';
});

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


//Route::get('/produtos/json', 'ProdutoController@listaJson');
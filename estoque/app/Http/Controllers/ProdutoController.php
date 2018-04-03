<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace estoque\Http\Controllers;

/**
 * Description of ProdutoController
 *
 * @author joao
 */
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra() {
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto[0]);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {

        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');


        DB::insert('insert into produtos values (null, ?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));
        return redirect()
                        ->action('ProdutoController@lista')
                        ->withInput(Request::only('nome'));
    }

    

}

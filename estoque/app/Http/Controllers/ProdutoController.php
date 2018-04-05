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
use estoque\Produtos;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = Produtos::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id) {
        $produto = Produtos::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('p', $produto);
    }

    public function remove($id) {
        $produto = Produtos::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }
        $produto->delete();
        return redirect()
                        ->action('ProdutoController@lista');
    }

    public function altera($id) {
        $produto = Produtos::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto.formulario')->with('p', $produto);
    }

    public function atualiza($id) {
        $produto = Produtos::findOrFail($id);
        $produto->update(Request::all());

        return redirect()
                        ->action('ProdutoController@lista')
                        ->withInput(Request::only('nome'));
    }

    public function adiciona() {
        $params = Request::all();
        $produto = new Produtos($params);

        $produto->save();
        return redirect()
                        ->action('ProdutoController@lista')
                        ->withInput(Request::only('nome'));
    }

    public function novo() {
        return view('produto.formulario');
    }

}

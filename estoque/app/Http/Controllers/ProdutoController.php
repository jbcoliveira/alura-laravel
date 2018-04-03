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
        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra() {        
            $id = Request::route('id');
            $produto = DB::select('select * from produtos where id = ?', [$id]);
            if (empty($produto)) {
                return "Esse produto não existe";
            }
            return view('detalhes')->with('p', $produto[0]);
        
    }

}

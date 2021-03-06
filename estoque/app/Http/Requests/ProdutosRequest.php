<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest {
/*
    public function __construct() {
        $this->middleware('nosso-middleware', ['only' => ['adiciona', 'remove','altera']]);
    }
*/
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'tamanho' => 'required|max:100',
            'quantidade' => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute é obrigatório.',
        ];
    }

}

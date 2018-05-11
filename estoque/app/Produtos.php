<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model {

    protected $table = 'produtos'; //Nao é necessario neste caso
    protected $fillable = array('nome', 'descricao', 'quantidade', 'valor', 'tamanho','categoria_id');
    protected $guarded = array('id');
    public $timestamps = false;

    public function categoria() {
        return $this->belongsTo('estoque\Categoria');
    }

}

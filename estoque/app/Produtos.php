<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{   
    protected $table = 'produtos'; //Nao é necessario neste caso
    protected $fillable = array('nome','descricao','quantidade','valor');
    protected $guarded = array('id');

    public $timestamps = false;
    
    
}

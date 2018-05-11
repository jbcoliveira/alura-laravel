<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaTamanhoNoProduto extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('produtos', function (Blueprint $table) {
            
            $table->increments('id');
            
            
            
            $table->string('nome', 100);
            $table->string('descricao', 100);
            $table->integer('quantidade');
            $table->float('valor');
            $table->string('tamanho', 100);
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('nome');
            $table->dropColumn('descricao');
            $table->dropColumn('quantidade');
            $table->dropColumn('valor');
            $table->dropColumn('tamanho');
            
        });
    }

}

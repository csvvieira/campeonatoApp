<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criar o meu schema
        Schema::create('campeonato', function (Blueprint $table){
            $table->increments('id');
            $table->longText('nome');
            $table->date('dataEncerramento');
            $table->longText('endereco');
            $table->timestamps();
        });
    }//Fim do up

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('campeonato');
    }//Fim do down
};

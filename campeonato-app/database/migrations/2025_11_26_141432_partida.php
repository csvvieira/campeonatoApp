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
        Schema::create('partida', function (Blueprint $table){
            $table->increments('id');
            $table->date('dataPartida');
            $table->longText('horario');
            $table->longText('mandanteNome');
            $table->longText('visitanteNome');
            $table->longText('resultado');
            $table->longText('campeonatoNome');
            $table->longText('arbitroNome');
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
        Schema::dropIfExist('partida');
    }//Fim do down
};
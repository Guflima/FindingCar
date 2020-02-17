<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbVeiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_veiculos', function (Blueprint $table) {
            $table->bigIncrements('id_viculo');
            $table->string('nome_propretario');
            $table->string('marca');
            $table->string('placa');
            $table->string('cor');
            $table->string('ano_fab');
            $table->string('ano_modelo');
            $table->string('chassi');
            $table->string('renavam');
            $table->string('descrição');
            $table->index(['nome_proprietario','placa','chassi','renavan']);
            $table->interger('modelo_id')->unsigned();
            $table->foreing('modelo_id')->references('id')->on('modelos')->onDelete('cascade');;
            $table->interger('user_id')->unsigned();
            $table->foreing('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_veiculos');
    }
}

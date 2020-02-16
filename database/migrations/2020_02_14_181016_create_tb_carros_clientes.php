<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCarrosClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_carros_clientes', function (Blueprint $table) {
            $table->tinyIncrements('id_carro');
            $table->string('nome_carro',30);
            $table->string('marca_carro',30);
            $table->string('Cor',15);
            $table->string('Combustivel',25);
            $table->string('Ano',10);
            $table->string('Cambio',25);
            $table->string('Preco',13);
            $table->string('quilometragem',7);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_carros_clientes');
    }
}

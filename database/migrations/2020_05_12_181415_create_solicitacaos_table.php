<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('solicitacao', ['comprar', 'vender']);
            $table->enum('tipoVC', ['Apartamento', 'Casa', 'Kitnet']);
            $table->string('logradouroEnderecoVC');
            $table->integer('numeroEnderecoVC');
            $table->string('bairroEnderecoVC');
            $table->string('cidadeEnderecoVC');
            $table->enum('qtdQuartos', ['1', '2', '3', '4', '5']);
            $table->float('valorVC');
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
        Schema::dropIfExists('solicitacoes');
    }
}

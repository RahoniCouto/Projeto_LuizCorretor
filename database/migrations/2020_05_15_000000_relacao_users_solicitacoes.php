<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacaoUsersSolicitacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::table('solicitacoes', function(Blueprint $table){
            $table->bigInteger('solicitacao_id')->unsigned();
            $table->foreign('solicitacao_id')->references('id')->on('users');
          });
      }
  
      public function down()
      {
          Schema::table('solicitacoes', function(Blueprint $table){
            $table->dropForeign('solicitacoes_solicitacao_id_foreign');
            $table->dropColumn('solicitacao_id');
          });
      }
}

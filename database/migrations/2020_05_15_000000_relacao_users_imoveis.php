<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacaoUsersImoveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::table('imoveis', function(Blueprint $table){
            $table->bigInteger('imovel_id')->unsigned();
            $table->foreign('imovel_id')->references('id')->on('users');
          });
      }
  
      public function down()
      {
          Schema::table('imoveis', function(Blueprint $table){
            $table->dropForeign('imoveis_imovel_id_foreign');
            $table->dropColumn('user_id');
          });
      }
}

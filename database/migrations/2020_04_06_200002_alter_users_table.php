<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('nomeCliente');
            $table->string('sobrenomeCliente');
            $table->string('cpfCliente');
            $table->string('rgCliente');
            $table->string('telCliente');
            $table->string('celCliente');
            $table->string('logradouroEndereco');
            $table->string('bairroEndereco');
            $table->integer('numeroEndereco');
            $table->string('cepEndereco');
            $table->string('cidadeEndereco');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('nomeCliente');
            $table->dropColumn('sobrenomeCliente');
            $table->dropColumn('cpfCliente');
            $table->dropColumn('rgCliente');
            $table->dropColumn('telCliente');
            $table->dropColumn('celCliente');
            $table->dropColumn('logradouroEndereco');
            $table->dropColumn('bairroEndereco');
            $table->dropColumn('numeroEndereco');
            $table->dropColumn('cepEndereco');
            $table->dropColumn('cidadeEndereco');
        });
    }
}

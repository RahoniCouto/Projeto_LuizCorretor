<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('status', ['contatar', 'vendido', 'cancelado'])->default('contatar');
            

            $table->string('nomeCliente')->nullable();
            $table->string('sobrenomeCliente')->nullable();
            $table->string('cpfCliente')->nullable();
            $table->string('rgCliente')->nullable();
            $table->string('telCliente')->nullable();
            $table->string('celCliente')->nullable();
            $table->string('logradouroEndereco')->nullable();
            $table->string('bairroEndereco')->nullable();
            $table->integer('numeroEndereco')->nullable();
            $table->string('cepEndereco')->nullable();
            $table->string('cidadeEndereco')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

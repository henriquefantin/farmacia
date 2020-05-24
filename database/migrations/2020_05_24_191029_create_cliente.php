<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->bigInteger('cpf');
            $table->bigInteger('rg');
            $table->string('rua', 50);
            $table->bigInteger('numero_casa');
            $table->string('cidade', 55);
            $table->string('bairro', 55);
            $table->bigInteger('cep');
            $table->string('estado', 50);
            $table->bigInteger('numero_celular');
            $table->string('email', 200);
            $table->string('estado_civil', 20);
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
        Schema::dropIfExists('cliente');
    }
}

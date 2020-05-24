<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('rasao_social', 70);
            $table->string('nome_fantasia', 70);
            $table->bigInteger('cnpj');
            $table->bigInteger('inscricao_estadual');
            $table->string('rua', 50);
            $table->bigInteger('numero_logradouro');
            $table->string('cidade', 55);
            $table->string('bairro', 55);
            $table->bigInteger('cep');
            $table->string('estado', 50);
            $table->bigInteger('numero_celular');
            $table->string('email', 200);
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
        Schema::dropIfExists('fornecedor');
    }
}

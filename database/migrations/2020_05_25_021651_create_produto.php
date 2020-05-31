<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('id_fornecedor');
            $table->string('nome', 255);
            $table->text('descricao');
            $table->decimal('valor_unitario', 20, 2);
            $table->string('unidade_venda', 20);
            
            ##Relacionamento
            $table->foreign('id_fornecedor')->references('id')->on('fornecedor');
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
        Schema::dropIfExists('produto');
    }
}

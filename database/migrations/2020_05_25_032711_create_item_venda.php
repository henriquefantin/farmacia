<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_venda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_venda');
            $table->unsignedBigInteger('id_produto');
            $table->decimal('quantidade', 20, 2);
            $table->decimal('valor_total', 20, 2);

            ##Relacionamento Venda-Produto
            $table->foreign('id_venda')->references('id')->on('venda');
            $table->foreign('id_produto')->references('id')->on('produto');

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
        Schema::dropIfExists('item_venda');
    }
}

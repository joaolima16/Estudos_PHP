<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('filiais', function(Blueprint $table){
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        });
    

        schema::create('produto_filiais', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');

        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn(['preco_venda','estoque_minimo', 'estoque_maximo']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
              // Exclui a tabela dependente primeiro
              Schema::dropIfExists('produto_filiais');

              // Depois, exclui a tabela 'filiais'
              Schema::dropIfExists('filiais');
      
              // Por último, restaura as colunas da tabela 'produtos'
              Schema::table('produtos', function (Blueprint $table) {
                  $table->decimal('preco_venda', 8, 2);
                  $table->integer('estoque_minimo');
                  $table->integer('estoque_maximo');
              });
            Schema::dropIfExists('produtos');

    }
};

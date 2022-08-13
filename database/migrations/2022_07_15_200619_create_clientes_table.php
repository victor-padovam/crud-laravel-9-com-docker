<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('cpf', 50)->nullable();
            $table->string('cnpj', 50)->nullable();
            $table->string('situacao', 14)->nullable();
            $table->string('email', 50);
            $table->string('cep', 15)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 20)->nullable();
            $table->string('telefone', 40)->nullable();
            $table->foreignId('estabelecimento_id')->constrained('estabelecimentos');
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
        Schema::dropIfExists('clientes');
    }
};

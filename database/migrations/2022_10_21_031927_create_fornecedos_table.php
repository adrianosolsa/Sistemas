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
        Schema::create('fornecedos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fantasia', 50);
            $table->integer('cnpj');
            $table->string('razao_social', 80);
            $table->string('telefone_1', 13);
            $table->string('telefone_2', 13);
            $table->string('email', 80);
            $table->string('estado', 50);
            $table->string('cidade', 50);
            $table->string('endereco', 100);
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
        Schema::dropIfExists('fornecedos');
    }
};

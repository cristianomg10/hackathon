<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagaEmpregosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaga_empregos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo");
            $table->longText("texto");
            $table->string("imagem");
            $table->date("validade");
            $table->bigInteger("id_recrutador");
            $table->softDeletes();
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
        Schema::dropIfExists('vaga_empregos');
    }
}

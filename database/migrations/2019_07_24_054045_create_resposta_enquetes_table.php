<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostaEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_enquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("id_enquete");
            $table->bigInteger("id_opcao_enquete");
            $table->bigInteger("id_usuario");
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
        Schema::dropIfExists('resposta_enquetes');
    }
}

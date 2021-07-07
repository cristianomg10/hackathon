<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcaoRespostaEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcao_resposta_enquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->string("opcao");
            $table->bigInteger("id_enquete");
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
        Schema::dropIfExists('opcao_resposta_enquetes');
    }
}

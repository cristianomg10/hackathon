<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostagemForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagem_forums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo");
            $table->string("postagem");
            $table->string("status");
            $table->date("ultima_atualizacao");
            $table->bigInteger("id_postagem");
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
        Schema::dropIfExists('postagem_forums');
    }
}

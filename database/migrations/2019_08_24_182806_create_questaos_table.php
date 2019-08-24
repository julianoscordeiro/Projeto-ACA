<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assunto');
            $table->string('enunciado');
            $table->string('alternativaA');
            $table->string('alternativaB');
            $table->string('alternativaC');
            $table->string('alternativaD');
            $table->string('alternativaE');
            $table->string('resposta');
            $table->string('imagem');
            $table->string('tipoQuestao');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('questaos');
    }
}

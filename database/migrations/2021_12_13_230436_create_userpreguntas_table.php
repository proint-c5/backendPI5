<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserpreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userpreguntas', function (Blueprint $table) {
            //$table->bigIncrements('userpregunta_id');
            $table->integer('puntuacion');
            $table->bigInteger('pregunta_id')->unsigned();
            $table->bigInteger('cevjuconsulta_id')->unsigned();
            $table->foreign('pregunta_id')->references('pregunta_id')->on('preguntas');
            $table->foreign('cevjuconsulta_id')->references('cevjuconsulta_id')->on('cevjuconsultas');

            $table->primary(array('pregunta_id', 'cevjuconsulta_id'));
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
        Schema::dropIfExists('userpreguntas');
    }
}

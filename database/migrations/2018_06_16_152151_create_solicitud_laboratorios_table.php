<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_laboratorios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_laboratorio')->unsigned();
            $table->integer('id_persona')->unsigned();
            $table->string('justificacion',255);
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('id_esolicitud')->unsigned();            
            $table->timestamps();
            $table->foreign('id_laboratorio')->references('id')->on('laboratorios');
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_esolicitud')->references('id')->on('estado_solicituds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_laboratorios');
    }
}

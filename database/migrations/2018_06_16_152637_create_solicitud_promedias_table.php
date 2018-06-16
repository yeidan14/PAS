<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudPromediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_promedias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_persona')->unsigned();
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('codigo',10);
            $table->string('descripcion',255);
            $table->date('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('palabras_clave',100);
            $table->string('materia',50);
            $table->string('entidad',50);
            $table->integer('id_esolicitud')->unsigned();            
            $table->timestamps();
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
        Schema::dropIfExists('solicitud_promedias');
    }
}

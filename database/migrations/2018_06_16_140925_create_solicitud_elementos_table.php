<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_elementos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_elemento')->unsigned();
            $table->integer('id_persona')->unsigned();
            $table->string('justificacion',255);
            $table->date('fecha');
            $table->integer('cantidad_elemento');           
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('id_esolicitud')->unsigned();            
            $table->timestamps();
            $table->foreign('id_elemento')->references('id')->on('elementos');
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
        Schema::dropIfExists('solicitud_elementos');
    }
}

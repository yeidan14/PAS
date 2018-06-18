<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sn');
            $table->string('nombre',30);
            $table->string('descripcion',200);
            $table->integer('id_laboratorio')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->timestamps();
            $table->foreign('id_laboratorio')->references('id')->on('laboratorios');
            $table->foreign('id_estado')->references('id')->on('estado_elementos');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementos');
    }
}

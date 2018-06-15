<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->string('codigo',10)->primary();
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('correo',40);
            $table->string('correo',40);
            $table->integer('tipo_persona')->usigned();
            $table->timestamps();
            $table->foreing('tipo_persona')->references('id_tipo')->on('tipo_persona');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}

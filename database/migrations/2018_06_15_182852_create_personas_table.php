<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return vosid
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',10)->unique();
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('email',40);
            $table->string('password',255);
            $table->integer('tipo_persona')->unsigned();
            $table->timestamps();
            $table->foreign('tipo_persona')->references('id')->on('tipo_personas');
            
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

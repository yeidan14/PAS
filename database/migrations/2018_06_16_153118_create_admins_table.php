<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
         $table->increments('id');
           $table->string('codigo',10);
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('correo',40);
            $table->string('dependencia',40);
            $table->string('telefono',40);
            $table->string('direccion',200);
            $table->string('clave',255);
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
        Schema::dropIfExists('admins');
    }
}

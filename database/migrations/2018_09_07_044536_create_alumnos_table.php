<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->timestamp('fecha_nacimiento')->nullable();;
            $table->integer('grado_alumno');
            $table->integer('tipo_sexo');
            $table->string('lugar_nacimiento');
            $table->string('nacionalidad');
            $table->integer('estado_civil');
            $table->integer('estado');
            $table->integer('telefono');
            $table->string('email');
            $table->timestamp('fecha_ingreso')->nullable();;
            $table->string('contrasena');
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
        Schema::dropIfExists('alumnos');
    }
}

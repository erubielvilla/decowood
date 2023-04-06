<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_empleado');
            $table->string('apellidos');
            $table->integer('telefono')->unique();
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
};

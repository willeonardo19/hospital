<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_pac');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->date('fech_na');
            $table->enum('sexo',['masculino','femenino'])->default('masculino');
            $table->enum('est_civ',['soltero','casado','divorciado','viudo','union'])->default('soltero');
            $table->string('ocupacion');
            $table->string('direccion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}

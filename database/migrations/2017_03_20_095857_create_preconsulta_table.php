<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreconsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preconsulta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('paciente')->onUpdate('cascade') ->onDelete('restrict');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('cascade') ->onDelete('restrict');
            $table->string('temp_oral');
            $table->string('pr_arterial');
            $table->string('fr_cardiaca');
            $table->string('fr_respiratoria');
            $table->string('peso');
            $table->string('talla');
            $table->string('au');
            $table->string('fcf');
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
        Schema::dropIfExists('preconsulta');
    }
}

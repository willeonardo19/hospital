<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->enum('estado',['solicitada','proceso','finalizada'])->default('solicitada');
            $table->foreign('paciente_id')->references('id')->on('paciente')->onUpdate('cascade') ->onDelete('restrict');
            $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('cascade') ->onDelete('restrict');
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
        Schema::dropIfExists('consulta');
    }

}

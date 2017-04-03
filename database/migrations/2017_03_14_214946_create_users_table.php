<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type',['admin','administracion','laboratorio','doctor','enfermera','secretaria','member'])->default('member');
            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personal')->onUpdate('cascade') ->onDelete('restrict');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

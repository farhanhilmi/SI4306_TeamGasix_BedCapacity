<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengelolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengelola', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_hospital')->unsigned()->index()->nullable();
            $table->foreign('id_hospital')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_users')->unsigned()->index()->nullable();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama');
            $table->string('email')->unique();
            // $table->rememberToken();
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
        Schema::dropIfExists('pengelola');
    }
}
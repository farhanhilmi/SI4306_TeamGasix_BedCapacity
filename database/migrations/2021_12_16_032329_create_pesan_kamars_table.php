<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_kamar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kamar')->unsigned()->index()->nullable();
            $table->foreign('id_kamar')->references('id')->on('kamar')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_hospital')->unsigned()->index()->nullable();
            $table->foreign('id_hospital')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_patient')->unsigned()->index()->nullable();
            $table->foreign('id_patient')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pesan_kamar');
    }
}
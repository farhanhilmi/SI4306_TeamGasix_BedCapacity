<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_hospital')->unsigned()->index()->nullable();
            $table->foreign('id_hospital')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('kelas');
            $table->string('harga');
            $table->integer('qty');
            $table->string('gambar');
            $table->longText('deskripsi');
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
        Schema::dropIfExists('kamar');
    }
}
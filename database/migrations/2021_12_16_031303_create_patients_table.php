<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('vaccine_id')->unsigned()->index()->nullable();
            // $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');
            $table->string('nama');
            $table->string('nik');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_hp');
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
        Schema::dropIfExists('patients');
    }
}
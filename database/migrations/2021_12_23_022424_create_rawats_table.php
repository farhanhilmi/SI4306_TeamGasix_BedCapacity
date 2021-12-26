<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_patient')->unsigned()->index()->nullable();
            $table->foreign('id_patient')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_hospital')->unsigned()->index()->nullable();
            $table->foreign('id_hospital')->references('id')->on('hospitals')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamp('check_in')->useCurrent = true;
            $table->string('jenis_rawat');
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
        Schema::dropIfExists('rawat');
    }
}
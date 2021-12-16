<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_pesan_kamar')->unsigned()->index()->nullable();
            $table->foreign('id_pesan_kamar')->references('id')->on('pesan_kamar')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamp('check_in')->useCurrent = true;
            $table->dateTime('check_in');
            $table->dateTime('check_out')->nullable();
            $table->string('biaya_total')->nullable();
            $table->string('status')->default('Belum Bayar');
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
        Schema::dropIfExists('tagihan');
    }
}
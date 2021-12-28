<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_obat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_patient')->unsigned()->index()->nullable();
            $table->foreign('id_patient')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamp('check_in')->useCurrent = true;
            $table->longText('jenis_obat')->nullable();
            $table->string('harga')->default('0');
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
        Schema::dropIfExists('pesan_obat');
    }
}
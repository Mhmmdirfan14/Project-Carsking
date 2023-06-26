<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('no_ktp');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('tujuan');
            $table->string('sopir');
            $table->foreignId('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('Mobil');
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
        Schema::dropIfExists('sewa');
    }
};

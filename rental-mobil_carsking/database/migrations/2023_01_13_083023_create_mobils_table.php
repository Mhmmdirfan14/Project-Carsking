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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nopol');
            $table->string('warna');
            $table->integer('harga_sewa');
            $table->string('deskripsi');
            $table->integer('tahun');
            $table->string('sopir');
            $table->foreignId('merk_id');
            $table->foreign('merk_id')->references('id')->on('merk');
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
        Schema::dropIfExists('mobil');
    }
};

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
        Schema::create('dusuns', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('penduduk_id');
            $table->string('nama_dusun');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kepala_dusun');
            $table->string('kepala_rt');
            $table->string('kepala_rw');
            $table->bigInteger('jumlah_warga');
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
        Schema::dropIfExists('dusuns');
    }
};

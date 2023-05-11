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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dusun_id');
            $table->string('nama_penduduk');
            $table->string('nik_penduduk');
            $table->date('ttl_penduduk');
            $table->enum('jk_penduduk', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->string('alamat_penduduk');
            $table->enum('ket_penduduk', ['Hidup', 'Wafat']);
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
        Schema::dropIfExists('penduduks');
    }
};

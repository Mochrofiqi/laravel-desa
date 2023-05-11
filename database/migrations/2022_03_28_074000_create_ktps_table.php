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
        Schema::create('ktps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('penduduk_id');
            $table->enum('darah', ['A', 'B', 'O', 'AB', '-']);
            $table->enum('status', ['Belum Menikah', 'Sudah Menikah']);
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('kk')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('ttd_ktp')->nullable();
            $table->string('file_ktp')->nullable();
            $table->enum('ket_ktp', ['Belum Diproses', 'Sedang Diproses', 'Selesai'])->nullable();
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
        Schema::dropIfExists('ktps');
    }
};

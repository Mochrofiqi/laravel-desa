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
        Schema::create('jenis_bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bansos');
            $table->string('periode_bansos');
            $table->string('penerima_bansos');
            $table->string('kategori_bansos');
            $table->string('barang_bansos');
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
        Schema::dropIfExists('jenis_bantuans');
    }
};

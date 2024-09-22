<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gambar_berita', function (Blueprint $table) {
            $table->bigIncrements('id_gambar');

            $table->unsignedBigInteger('id_berita');
            $table->foreign('id_berita')->references('id_berita')->on('berita')->onDelete('cascade');
            $table->string('gambar');
            $table->date('tanggal_upload');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_berita');
    }
};

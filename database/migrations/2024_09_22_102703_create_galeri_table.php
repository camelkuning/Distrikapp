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
        Schema::create('galeri', function (Blueprint $table) {
            $table->bigIncrements('id_galeri');
            // Foreign keys
            $table->unsignedBigInteger('id_kontent');
            $table->foreign('id_kontent')
                ->references('id_kontent')
                ->on('kontent')
                ->onDelete('cascade');

            $table->string('judul_galeri');
            $table->text('deskripsi_galeri')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};

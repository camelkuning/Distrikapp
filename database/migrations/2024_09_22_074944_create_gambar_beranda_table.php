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
        Schema::create('gambar_beranda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_beranda');
            $table->foreign('id_beranda')
                ->references('id')->on('beranda')
                ->onDelete('cascade');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_beranda');
    }
};

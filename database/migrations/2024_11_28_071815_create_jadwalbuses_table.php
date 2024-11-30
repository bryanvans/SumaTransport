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
        Schema::create('jadwalbus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bus'); 
            $table->time('waktu_keberangkatan');
            $table->time('waktu_tiba'); 
            $table->string('dari'); 
            $table->string('tujuan'); 
            $table->integer('jumlah_kursi'); 
            $table->date('tanggal'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalbus');
    }
};

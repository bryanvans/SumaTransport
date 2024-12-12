<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->id(); // Primary key, auto increment
            $table->string('id_bus', 50); // ID unik bus (relasi dengan tabel "buses")
            $table->time('waktu_keberangkatan'); // Waktu keberangkatan bus
            $table->time('waktu_tiba'); // Waktu tiba bus
            $table->string('dari', 100); // Lokasi asal keberangkatan
            $table->string('tujuan', 100); // Lokasi tujuan
            $table->integer('jumlah_kursi'); // Jumlah kursi tersedia pada jadwal ini
            $table->date('tanggal'); // Tanggal perjalanan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedules');
    }
}

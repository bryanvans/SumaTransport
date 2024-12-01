<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->id(); // ID primary key
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->time('departure_time'); // Waktu Keberangkatan
            $table->time('arrival_time'); // Waktu Tiba
            $table->string('from'); // Dari
            $table->string('to'); // Tujuan
            $table->integer('seat_count'); // Jumlah Kursi
            $table->date('date'); // Tanggal
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus_schedules');
    }
}

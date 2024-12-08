<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('id_bus');
            $table->time('waktu_keberangkatan');
            $table->time('waktu_tiba');
            $table->string('dari');
            $table->string('tujuan');
            $table->integer('jumlah_kursi');
            $table->date('tanggal');
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('buses');
    }
}

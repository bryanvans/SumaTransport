<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('routes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('bus_id')->constrained('buses');
        $table->string('departure_city');
        $table->string('arrival_city');
        $table->time('departure_time');
        $table->time('arrival_time');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};

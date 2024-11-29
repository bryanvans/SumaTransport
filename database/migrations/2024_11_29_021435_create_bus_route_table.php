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
        Schema::create('bus_route', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade'); // Menghubungkan dengan bus
            $table->foreignId('route_id')->constrained('routes')->onDelete('cascade'); // Menghubungkan dengan route
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus_route');
    }

};

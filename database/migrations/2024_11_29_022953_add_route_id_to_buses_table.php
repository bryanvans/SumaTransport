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
    Schema::table('buses', function (Blueprint $table) {
        $table->unsignedBigInteger('route_id')->nullable();  // Menambahkan kolom route_id
        $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade'); // Menambahkan foreign key constraint
    });
}

public function down()
{
    Schema::table('buses', function (Blueprint $table) {
        $table->dropForeign(['route_id']); // Menghapus foreign key constraint
        $table->dropColumn('route_id'); // Menghapus kolom route_id
    });
}
};

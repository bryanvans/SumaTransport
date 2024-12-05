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
    Schema::table('users', function (Blueprint $table) {
        $table->string('name')->default('default_username')->change(); // Tambahkan default
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('name')->default(null)->change(); // Kembalikan default ke null
    });
}

};

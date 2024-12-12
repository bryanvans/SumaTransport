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
    Schema::table('questions', function (Blueprint $table) {
        $table->text('answer')->nullable(); // Menambahkan kolom 'answer'
    });
}

public function down()
{
    Schema::table('questions', function (Blueprint $table) {
        $table->dropColumn('answer'); // Menghapus kolom 'answer' jika migrasi di-rollback
    });
}
};

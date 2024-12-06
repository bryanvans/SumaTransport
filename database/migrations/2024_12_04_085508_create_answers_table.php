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
    Schema::create('answers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('question_id'); // Relasi ke pertanyaan
        $table->unsignedBigInteger('user_id'); // Relasi ke user
        $table->text('answer'); // Isi jawaban
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};

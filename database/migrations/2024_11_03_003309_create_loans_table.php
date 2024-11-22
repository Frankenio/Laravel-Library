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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reader_id'); // Lector a quien presta
            $table->foreignId('book_id'); // Libro a prestar
            $table->date('loan_date'); // Fecha de préstamo
            $table->date('return_date'); // Fecha de devolución
            $table->string('status'); // Estado del préstamo
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('reader_id')->references('id')->on('readers')
            ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};

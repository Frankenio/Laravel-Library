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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id'); // Libro reservado
            $table->foreignId('reader_id'); // Lector que reserva
            $table->date('reservation_date'); // Fecha de reserva
            $table->date('expiration_date'); // Fecha de vencimiento
            $table->string('status'); // Estado de la reserva
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
        Schema::dropIfExists('reservations');
    }
};

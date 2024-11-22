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
        Schema::create('fines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id'); // Préstamo a que se le aplica
            $table->foreignId('reader_id'); // Lector a quien se le aplica
            $table->date('fine_date'); // Fecha de la multa
            $table->decimal('amount', 10, 2)->unsigned(); // Monto de la multa
            $table->text('description'); // Descripción de la multa
            $table->string('status'); // Estado de la multa
            $table->timestamps();

            $table->foreign('loan_id')->references('id')->on('loans')
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
        Schema::dropIfExists('fines');
    }
};

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
        Schema::create('descriptions', function (Blueprint $table) {
            $table->foreignId('book_id')->primary();
            $table->string('language'); // Idioma
            $table->string('temes'); // Temas
            $table->string('summary'); // Resumen
            $table->text('content'); // Contenido
            $table->integer('number_of_pages'); // Número de páginas
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')
            ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descriptions');
    }
};

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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('code_local')->unique(); // Código local
            $table->string('title'); // Título
            $table->year('published_year')->nullable(); // Año de publicación (sin unsigned)
            $table->string('isbn', 20)->nullable()->unique(); // ISBN (sin unsigned)
            $table->string('type'); // Tipo (Libro, Tesis, Proyecto, Trabajos)
            $table->unsignedInteger('shelf_number')->nullable(); // Número de estantería (unsigned, ya que es un número)
            $table->string('status'); // Estado (Disponible, Prestado, Reservado)
            $table->string('publisher')->nullable(); // Editorial
            $table->string('language')->nullable(); // Idioma
            $table->unsignedInteger('pages')->nullable(); // Páginas (con unsigned, para garantizar valores positivos)
            $table->enum('academic_level', ['Introducción', 'Intermedio', 'Avanzado'])->nullable(); // Nivel académico
            $table->string('supplier')->nullable(); // Proveedor (Particular, Donacion, Compra, etc.)
            $table->text('description')->nullable(); // Descripción Contenido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

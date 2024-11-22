
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
            $table->foreignId('author_id')->nullable(); // Autor
            $table->foreignId('publisher_id')->nullable(); // Editorial
            $table->integer('published_year')->nullable(); // Año de publicación
            $table->foreignId('category_id')->nullable(); // Categoría
            $table->bigInteger('isbn')->unsigned()->unique()->nullable(); // ISBN (11 dígitos)
            $table->integer('shelf_number')->nullable(); // Número de estantería
            $table->string('status'); // Estado
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('publisher_id')->references('id')->on('publishers')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('category_id')->references('id')->on('categories')
            ->cascadeOnUpdate()->cascadeOnDelete();
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

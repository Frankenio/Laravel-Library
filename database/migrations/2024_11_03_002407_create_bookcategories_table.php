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
        Schema::create('bookcategories', function (Blueprint $table) {
            $table->foreignId('book_id');
            $table->foreignId('category_id');
            $table->primary(['book_id', 'category_id']);
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')
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
        Schema::dropIfExists('book__categories');
    }
};

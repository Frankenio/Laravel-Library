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
            $table->string('title');
            $table->foreignId('author_id');
            $table->foreignId('publisher_id')->nullable();
            $table->integer('published_year');
            $table->bigInteger('isbn')->unsigned()->unique()->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('publisher_id')->references('id')->on('publishers')
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

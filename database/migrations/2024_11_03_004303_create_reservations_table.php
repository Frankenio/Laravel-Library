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
            $table->foreignId('copy_id');
            $table->foreignId('reader_id');
            $table->date('reservation_date');
            $table->date('expiration_date');
            $table->string('status');
            $table->timestamps();

            $table->foreign('copy_id')->references('id')->on('copies')
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

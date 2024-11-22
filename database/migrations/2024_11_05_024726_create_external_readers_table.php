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
        Schema::create('external_readers', function (Blueprint $table) {
            $table->id();
            $table->string('CI')->unique(); // Código de identificación
            $table->string('first_name'); // Nombre
            $table->string('last_name'); // Apellido
            $table->date('birth_date'); // Fecha de nacimiento
            $table->string('nationality'); // Nacionalidad
            $table->string('email')->unique(); // Correo electrónico
            $table->string('phone'); // Teléfono
            $table->string('address')->nullable(); // Dirección
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_readers');
    }
};

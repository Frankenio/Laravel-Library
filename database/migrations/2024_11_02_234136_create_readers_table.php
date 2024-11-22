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
        Schema::create('readers', function (Blueprint $table) {
            $table->id();
            $table->string('CI')->unique(); // Código de identificación
            $table->string('first_name'); // Nombre
            $table->string('last_name'); // Apellido
            $table->date('birth_date'); // Fecha de nacimiento
            $table->foreignId('career_id')->nullable(); // Carrera
            $table->string('nationality')->nullable(); // Nacionalidad
            $table->string('phone'); // Teléfono
            $table->string('address')->nullable(); // Dirección
            $table->string('role')->default('estudiante')->nullable(); // Rol
            $table->string('email')->unique(); // Correo electrónico
            $table->string('password'); // Contraseña
            $table->timestamps();

            $table->foreign('career_id')->references('id')->on('careers')
            ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readers');
    }
};

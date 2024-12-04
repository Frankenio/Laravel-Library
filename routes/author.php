<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

// Rutas protegidas por autenticación para interactuar con libros
Route::middleware('auth')->group(function () {
    // Crear un nuevo autor
    Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');

    // Mostrar todos los autores
    Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');

    // Editar un autor existente
    Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::patch('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');

    // Eliminar un autor
    Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
});

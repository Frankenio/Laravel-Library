<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;

// Rutas protegidas por autenticación para interactuar con libros
Route::middleware('auth')->group(function () {

    // Crear un nuevo libro
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');

    // Mostrar todos los libros
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

    // Editar un libro existente
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::patch('/books/{book}', [BookController::class, 'update'])->name('books.update');

    // Eliminar un libro
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
});


// Rutas privadas para administrar el catálogo de libros
Route::middleware('auth')->group(function () {
    Route::controller(CatalogueController::class)->group(function () {
        Route::get('/catalog', ['index'])->name('catalog.index');
        Route::get('/catalog/create', ['create'])->name('catalog.create');
        Route::post('/catalog', ['store'])->name('catalog.store');
        Route::get('/catalog/{catalog}', ['show'])->name('catalog.show');
        Route::get('/catalog/{catalog}/edit', ['edit'])->name('catalog.edit');
        Route::put('/catalog/{catalog}', ['update'])->name('catalog.update');
        Route::delete('/catalog/{catalog}', ['destroy'])->name('catalog.destroy');
    });
});

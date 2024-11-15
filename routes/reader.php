<?php

use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

// Rutas protegidas por autenticación para interactuar con los lectores (readers)
Route::middleware('auth')->group(function () {
    // Mostrar todos los lectores
    Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');

    // Crear un nuevo lector
    Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
    Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');

    // Editar un lector existente
    Route::get('/readers/{reader}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
    Route::patch('/readers/{reader}', [ReaderController::class, 'update'])->name('readers.update');

    // Ver los datos de un lector
    Route::get('/readers/{reader}', [ReaderController::class, 'show'])->name('readers.show');

    // Eliminar un lector
    Route::delete('/readers/{reader}', [ReaderController::class, 'destroy'])->name('readers.destroy');
});
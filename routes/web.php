<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/catalogo', [CatalogueController::class, 'index'])->name('catalogue.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('books', BookController::class);


Route::post('/categorias', [CategoryController::class, 'store'])->name('categorias.store');

require __DIR__.'/auth.php';
require __DIR__ . '/book.php';
require __DIR__ . '/reader.php';
require __DIR__ . '/author.php';

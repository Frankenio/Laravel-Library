<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', ['index'])->name('user.index');
        Route::get('/user/create', ['create'])->name('user.create');
        Route::post('/user', ['store'])->name('user.store');
        Route::get('/user/{user}', ['show'])->name('user.show');
        Route::get('/user/{user}/edit', ['edit'])->name('user.edit');
        Route::put('/user/{user}', ['update'])->name('user.update');
        Route::delete('/user/{user}', ['destroy'])->name('user.destroy');
    });
});
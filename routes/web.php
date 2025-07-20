<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/', [MovieController::class, 'allMovies'])->name('home');

    Route::group(['prefix' => '/movies'], function () {
        Route::get('/', [MovieController::class, 'myMovies'])->name('my-movies');
        Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
        Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    });
});

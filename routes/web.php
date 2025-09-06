<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/', [MovieController::class, 'explore'])->name('home');

    Route::group(['prefix' => '/profile'], function () {
        Route::get('/', [UserProfileController::class, 'index'])->name('profile');
        Route::put('/', [UserProfileController::class, 'store'])->name('profile.update');
    });

    Route::group(['prefix' => '/movies'], function () {
        Route::get('/', [MovieController::class, 'myMovies'])->name('my-movies');
        Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
        Route::post('/', [MovieController::class, 'store'])->name('movies.store');
        Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');
        Route::post('/{movie}/review', [MovieController::class, 'review'])->name('movies.review');
    });
});

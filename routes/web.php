<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/category/{id}', [MovieController::class, 'showCategory'])->name('movies.category');
Route::get('/show/{id}', [MovieController::class, 'showMovie'])->name('movies.category');

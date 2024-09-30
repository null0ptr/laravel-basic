<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/show/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/create', [BookController::class, 'create'])->name('books.create');
Route::post('/store', [BookController::class, 'store'])->name('books.store');
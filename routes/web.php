<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\PenulisController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('buku', BookController::class);

Route::resource('penulis', PenulisController::class);
Route::resource('kategori', CategoryController::class)->except('show');
Route::resource('penerbit', PublisherController::class)->except('show');


//0
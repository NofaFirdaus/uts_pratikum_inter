<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('kategoris',KategoriController::class);
Route::resource('bukus',BukuController::class);

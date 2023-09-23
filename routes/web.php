<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanDepanController;
use App\Http\Controllers\ProfilePembuatController;
use App\Http\Controllers\InformasiKampusController;

Route::get('/', [HalamanDepanController::class, 'index']);
Route::get('/profile-pembuat', [ProfilePembuatController::class, 'index']);
Route::get('/informasi-kampus', [InformasiKampusController::class, 'index']);

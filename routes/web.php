<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KunjunganController; // ← Tambahkan ini!

Route::get('/', fn() => redirect('/kunjungan'));
Route::resource('kunjungan', KunjunganController::class);

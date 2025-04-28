<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{nis}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/store', [SiswaController::class, 'store'])->name('siswa.store');

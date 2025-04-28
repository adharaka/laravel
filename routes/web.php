<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/tambahsiswa', function () {
    return view('tambah');
});

Route::get('/detail', function () {
    return view('detail');
});

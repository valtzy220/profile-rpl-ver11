<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/data-guru', function () {
    return view('data-guru');
})->name('data-guru');
Route::get('/mapel', function () {
    return view('mata-pelajaran');
})->name('mata-pelajaran');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/dimasradofadilah', function () {
    return view('fasilitas');
})->name('fasilitas');

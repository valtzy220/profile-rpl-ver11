<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',
 [App\Http\Controllers\PageController::class, 'beranda'])
  ->name('beranda');

Route::get('/contact', 
 [App\Http\Controllers\PageController::class, 'contact'])
    ->name('contact');

Route::get('/fasilitas',
    [App\Http\Controllers\PageController::class, 'fasilitas'])
    ->name('fasilitas');
Route::get('/data-guru',
    [App\Http\Controllers\PageController::class, 'guru'])
    ->name('data-guru');
Route::get('/mata-pelajaran',
    [App\Http\Controllers\PageController::class, 'pelajaran'])
    ->name('mata-pelajaran');
Route::get('/profile',
    [App\Http\Controllers\PageController::class, 'profile'])
    ->name('profile');
Route::get('/prestasi',
    [App\Http\Controllers\PageController::class, 'prestasi'])
    ->name('prestasi');
Route::get('/gallery',
    [App\Http\Controllers\PageController::class, 'gallery'])
    ->name('gallery');
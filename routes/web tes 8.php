<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return '<h1>selamat belajar laravel 10';
});


//Mengirim data variable ke views/beritabaru
Route::get('/beritabaru',function () {
    return view ('infotahunbaru.beritabaru',['judul' => 'Sebentar Lagi Tahun Baru Ya Kan ??']);
});
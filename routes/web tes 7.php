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


//menampilkan data di vew di folder infotahunbaru
Route::get('/info',function () {
    return view ('infotahunbaru.info');
});
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
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
})->name('home');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');
Route::get('/berkas-pendukung', function () {
    return view('index');
})->name('berkas-pendukung');
Route::get('/daftar-layanan', function () {
    return view('daftar-layanan');
})->name('daftar-layanan');
Route::get('/form-pelayanan', function () {
    return view('form-pelayanan');
})->name('form-pelayanan');
Route::get('/lacak-tiket', function () {
    return view('lacak-tiket');
})->name('lacak-tiket');
Route::get('/lacak-no-tiket', function () {
    return view('lacak-no-tiket');
})->name('lacak-no-tiket');
Route::get('/no-tiket', function () {
    return view('no-tiket');
})->name('no-tiket');
Route::get('/tiket-selesai', function () {
    return view('tiket-selesai');
})->name('tiket-selesai');


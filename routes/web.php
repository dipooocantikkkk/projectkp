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
    return view('home');
});
Route::get('/visi', function () {
    return view('visi');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/struktur', function () {
    return view('struktur');
});
Route::get('/sarana', function () {
    return view('sarana');
});
Route::get('/pendaftaran', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/kurikulum', function () {
    return view('kurikulum');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/program', function () {
    return view('program');
});
Route::get('/formulir', function () {
    return view('formulir');
});
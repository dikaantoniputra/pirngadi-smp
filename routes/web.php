<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.page.index');
});

Route::get('/tentang-kami', function () {
    return view('landing.page.about');
});

Route::get('/fasilitas', function () {
    return view('landing.page.classes');
});

Route::get('/guru', function () {
    return view('landing.page.guru');
});


Route::get('/hubungi-kami', function () {
    return view('landing.page.contact');
});

Route::get('/gallery', function () {
    return view('landing.page.gallery');
});

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

Route::get('/services', function () {
    return view('service');
});

Route::get('/our-team', function () {
    return view('team');
});

Route::get('/about-us', function () {
    return view('aboutUs');
});

Route::get('/contact-us', function () {
    return view('contact');
});


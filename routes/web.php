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

Route::get('/', function () { return view('welcome');});

Route::get('/contact', function () { return view('contact');});

Route::get('/tampilan', function () { return view('tampilan');});

Route::get('/webafif', function () { return view('webafif');});

Route::get('/tentang', function () { return view('tentang');});

Route::view('/profile', 'profile');

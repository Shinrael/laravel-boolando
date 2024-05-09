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

    $products = config('products');
    $hicon = config('hicon');
    $info = config('info');
    $social = config('social');

    return view('home', compact('products','hicon','info','social'));
})->name('home');

Route::get('/woman', function () {

    $hicon = config('hicon');
    $info = config('info');
    $social = config('social');

    return view('woman', compact('hicon','info','social'));
})->name('woman');

Route::get('/man', function () {

    $hicon = config('hicon');
    $info = config('info');
    $social = config('social');

    return view('man', compact('hicon','info','social'));
})->name('man');

Route::get('/kid', function () {

    $hicon = config('hicon');
    $info = config('info');
    $social = config('social');

    return view('kid', compact('hicon','info','social'));
})->name('kid');

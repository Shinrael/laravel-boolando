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
    $menu = config('menues');
    $hicon = config('hicon');
    $info = config('info');
    $social = config('social');

    return view('home', compact('products','menu','hicon','info','social'));
})->name('home');

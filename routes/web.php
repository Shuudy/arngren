<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/contact', 'contact')->name('contact');
Route::view('/products/1', 'product')->name('product');
Route::view('/products', 'products')->name('products');
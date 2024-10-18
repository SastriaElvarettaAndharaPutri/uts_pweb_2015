<?php

use Illuminate\Support\Facades\Route;

Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/contact', 'contact');

Route::get('/', function () {
    return view('welcome');
});

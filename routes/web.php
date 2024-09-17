<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alma', function () {
    return view('alma');
});

Route::get('/korte', function () {
    return view('korte');
});
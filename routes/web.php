<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/base', function () {
    return view('base');
});

Route::get('/third', function () {
    return view('third'); // <-- third.blade.php file doesn't exist
});
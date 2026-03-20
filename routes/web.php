<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('linktree');
});

Route::get('/welcome', function () {
    return view('welcome');
});

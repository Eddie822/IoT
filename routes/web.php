<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// En routes/web.php
Route::get('/inicio', function () {
    return view('index');
});


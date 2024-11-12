<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/historia', function () {
    return view('historia');
})->name('historia');

Route::get('/que', function () {
    return view('que');
})->name('que');

Route::get('/funciones', function () {
    return view('funciones');
})->name('funciones');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

Route::post('/post', [FormController::class, 'store']);
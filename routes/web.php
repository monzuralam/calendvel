<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
<?php

use Illuminate\Support\Facades\Route;

// Rute untuk tampilan web
Route::get('/', function () {
    return view('welcome');
});
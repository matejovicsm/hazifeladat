<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hazi;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/fooldal', function () {
    return view('fooldal');
});



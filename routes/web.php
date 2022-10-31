<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hazi;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/fooldal', function () {
    return view('fooldal');
});

Route::get('/form',[hazi::class,"urlap"]);
Route::post('/form',[hazi::class,"rogzites"]);

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/showroom', function () {
    return view('showroom');
});
Route::get('/vestidos-plus-size', function () {
    return view('plus-size');
});

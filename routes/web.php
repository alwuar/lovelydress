<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});
Route::get('/showroom', function () {
    return view('showroom');
});
Route::get('/vestidos-plus-size', function () {
    return view('plus-size');
});
Route::post('/enviar-contacto', [ContactController::class, 'send'])->name('contacto.send');


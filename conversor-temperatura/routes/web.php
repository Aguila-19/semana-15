<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperaturaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/temperatura', [TemperaturaController::class, 'index']);
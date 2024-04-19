<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;


// Ruta para la página de inicio o vista principal
Route::get('/', function () {
    return view('layouts.welcome');
});

Route::resource('hotel', HotelController::class);

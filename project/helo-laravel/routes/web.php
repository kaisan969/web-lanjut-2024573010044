<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

// route ke WelcomeController
Route::get('/welcome', [WelcomeController::class, 'index']);

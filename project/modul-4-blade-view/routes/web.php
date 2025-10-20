<?php


use App\Http\Controllers\DasarBladeController;  //dasar
use App\Http\Controllers\LogicController;  //logistic
use App\Http\Controllers\PageController; //page

Route::get('/admin', [PageController::class, 'admin']);
Route::get('/user', [PageController::class, 'user']);

Route::get('/logic', [LogicController::class, 'show']);  //logistic

Route::get('/dasar', [DasarBladeController::class, 'showData']);


Route::get('/', function () {
    return view('welcome');
});

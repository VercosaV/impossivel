<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WellcomeController;

/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/

Route::get('/', [WellcomeController::class, 'welcome'])->name('welcome');

Route::get('/home', [HomeController::class, 'home'])->name('home');
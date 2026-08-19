<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
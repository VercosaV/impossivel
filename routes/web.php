<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
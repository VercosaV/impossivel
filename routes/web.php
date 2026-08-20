<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\UserController;

Route::get('/', [WellcomeController::class, 'welcome'])->name('welcome');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/usuarios/novo', [UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');


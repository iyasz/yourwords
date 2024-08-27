<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'handleLogin']);
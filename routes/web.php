<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);


Route::get('/login', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'handleLogin']);

Route::get('/logout', [AuthController::class, 'logout']);



// Users 
Route::get('/dashboard', [IndexController::class, 'dashboard']);
Route::get('/project/new', [ProjectController::class, 'index']);
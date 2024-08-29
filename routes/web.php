<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);


Route::get('/login', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'handleLogin']);

Route::get('/logout', [AuthController::class, 'logout']);



// Users 
Route::get('/dashboard', [IndexController::class, 'dashboard']);

Route::get('/project/new', [ProjectController::class, 'index']);
Route::post('/project/new', [ProjectController::class, 'store']);
Route::get('/project/list/{id}', [ProjectController::class, 'detail']);
Route::post('/project/list/{id}', [ProjectController::class, 'handleAddList']);


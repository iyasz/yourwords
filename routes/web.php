<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'handleLogin']);
});

Route::middleware(['auth'])->group(function () {
    
    // auth 
    Route::get('/logout', [AuthController::class, 'logout']);
        
    // Users 
    Route::get('/dashboard', [IndexController::class, 'dashboard']);

    Route::get('/project/new', [ProjectController::class, 'index']);
    Route::post('/project/new', [ProjectController::class, 'store']);
    Route::get('/project/list/{id}', [ProjectController::class, 'detail']);
    Route::get('/project/{id}/edit', [ProjectController::class, 'handleEditProject']);
    Route::put('/project/{id}/edit', [ProjectController::class, 'handleUpdateProject']);
    Route::delete('/project/{id}/edit', [ProjectController::class, 'handleDeleteProject']);

    Route::post('/project/list/{id}', [ProjectController::class, 'handleAddList']);
    Route::delete('/project/list/{id}', [ProjectController::class, 'handleDeleteList']);

});


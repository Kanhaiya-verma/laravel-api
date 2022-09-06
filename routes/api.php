<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//public route
// Route::get('/students', [studentController::class, 'index']);
// Route::get('/students/{id}', [studentController::class, 'show']);
// Route::post('/students', [studentController::class, 'store']);
// Route::put('/students/{id}', [studentController::class, 'update']);
// Route::delete('/students/{id}', [studentController::class, 'destroy']);
// Route::get('/students/search/{city}', [studentController::class, 'search']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/addCategory', [CategoryController::class, 'store']);
Route::post('/addproduct', [ProductController::class, 'store']);
Route::get('/Product', [ProductController::class, 'index']);

// Route::middleware('auth:sanctum')->get('/students', [studentController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/students/{id}', [studentController::class, 'show']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/students', [studentController::class, 'index']);
    Route::get('/students/{id}', [studentController::class, 'show']);
    Route::post('/students', [studentController::class, 'store']);
    Route::put('/students/{id}', [studentController::class, 'update']);
    Route::delete('/students/{id}', [studentController::class, 'destroy']);
    Route::get('/students/search/{city}', [studentController::class, 'search']);
    Route::get('/logout', [UserController::class, 'logout']);
});

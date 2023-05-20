<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/dashboard', [DashboardController::class, 'index']);

// Products
Route::get('/dashboard/products', [ProductController::class, 'index']);
Route::get('/dashboard/products/create', [ProductController::class, 'create']);
Route::post('/dashboard/products/store', [ProductController::class, 'store']);
Route::get('/dashboard/products/edit/{id}', [ProductController::class, 'edit']);
Route::patch('/dashboard/products/update/{id}', [ProductController::class, 'update']);
Route::delete('/dashboard/products/delete/{id}', [ProductController::class, 'destroy']);

// Categories
Route::get('/dashboard/categories', [CategoryController::class, 'index']);
Route::get('/dashboard/categories/create', [CategoryController::class, 'create']);
Route::post('/dashboard/categories/store', [CategoryController::class, 'store']);
Route::get('/dashboard/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::patch('/dashboard/categories/update/{id}', [CategoryController::class, 'update']);
Route::delete('/dashboard/categories/delete/{id}', [CategoryController::class, 'destroy']);

// Home Page::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/', [HomeController::class, 'index']);

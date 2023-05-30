<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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

// Dashboard ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Products
    Route::get('/dashboard/products', [ProductController::class, 'index'])->name('products');
    Route::get('/dashboard/products/create', [ProductController::class, 'create']);
    Route::get('/dashboard/products/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/dashboard/products/store', [ProductController::class, 'store']);
    Route::patch('/dashboard/products/update/{id}', [ProductController::class, 'update']);
    Route::delete('/dashboard/products/delete/{id}', [ProductController::class, 'destroy']);

    // Categories
    Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/dashboard/categories/create', [CategoryController::class, 'create']);
    Route::get('/dashboard/categories/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/dashboard/categories/store', [CategoryController::class, 'store']);
    Route::patch('/dashboard/categories/update/{id}', [CategoryController::class, 'update']);
    Route::delete('/dashboard/categories/delete/{id}', [CategoryController::class, 'destroy']);

    // Orders
    Route::get('/dashboard/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/dashboard/orders/edit/{id}', [OrderController::class, 'edit']);
    Route::patch('/dashboard/orders/update/{id}', [OrderController::class, 'update']);
    Route::delete('/dashboard/orders/delete/{id}', [OrderController::class, 'destroy']);

    // Users
    Route::get('/dashboard/users', [UsersController::class, 'index'])->name('orders');
    Route::get('/dashboard/users/create', [UsersController::class, 'create']);
    Route::get('/dashboard/users/edit/{id}', [UsersController::class, 'edit']);
    Route::post('/dashboard/users/store', [UsersController::class, 'store']);
    Route::patch('/dashboard/users/update/{id}', [UsersController::class, 'update']);
    Route::delete('/dashboard/users/delete/{id}', [UsersController::class, 'destroy']);
});

// Orders, Users can access this route to create orders
Route::post('/orders/store', [OrderController::class, 'store'])->middleware('auth');

// Home Page ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'details']);

// Authentication :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Auth::routes();

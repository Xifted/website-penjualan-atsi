<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

// Multi Lang
Route::get('/change', [LangController::class, 'change'])->name('changeLang');

// Landing Page
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products?category={id}&sort={sort}&min_price={pmin}]&max_price={pmax}', [ProductsController::class, 'index']);
Route::post('/actionOrders', [HomeController::class, 'actionOrders'])->name('actionOrders');

// Admin Pages
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth.admin');

// Products
Route::get('/admin/products', [AdminController::class, 'products'])->middleware('auth.admin');
Route::post('/admin/products/actionAdd', [AdminController::class, 'actionAddProduct'])->name('actionAddProduct')->middleware('auth.admin');
Route::post('/admin/products/actionEdit/{id}', [AdminController::class, 'actionEditProduct'])->middleware('auth.admin');
Route::get('/admin/products/delete/{id}', [AdminController::class, 'actionDeleteProduct'])->name('actionDeleteProduct')->middleware('auth.admin');

// Categories
Route::get('/admin/categories', [AdminController::class, 'categories'])->middleware('auth.admin');
Route::post('/admin/categories/actionAdd', [AdminController::class, 'actionAddCategory'])->name('actionAddCategory')->middleware('auth.admin');
Route::post('/admin/categories/actionEdit/{id}', [AdminController::class, 'actionEditCategory'])->middleware('auth.admin');
Route::get('/admin/categories/delete/{id}', [AdminController::class, 'actionDeleteCategory'])->name('actionDeleteCategory')->middleware('auth.admin');

// Orders
Route::get('/admin/orders', [AdminController::class, 'orders'])->middleware('auth.admin');

// accounts
Route::get('/admin/profile/{id}', [AdminController::class, 'profile'])->middleware('auth.admin');
Route::post('/admin/profile/actionEdit/{id}', [AdminController::class, 'profileEdit'])->name('profileEdit')->middleware('auth.admin');

// Login/Logout
Route::get('/admin/login', [AdminController::class, 'login'])->name('loginAdmin');
Route::post('/admin/login/action', [AdminController::class, 'actionLoginAdmin'])->name('actionLoginAdmin');
Route::get('/admin/logout', [AdminController::class, 'actionLogout'])->name('actionLogout');
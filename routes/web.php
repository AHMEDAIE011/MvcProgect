<?php

use APP\Controllers\AdminController;
use APP\Controllers\auth\admin\LoginController;
use APP\Controllers\auth\admin\ProfileController;
use APP\Controllers\auth\admin\RegisterController;
use APP\Controllers\HomeController;
use APP\Controllers\PrudectController;
use APP\Controllers\ServiceController;
use SecTheater\Http\Route;

// -------------------------------- Site -------------------------
Route::get('/', [HomeController::class, 'index']);
Route::get('/Product-page', [HomeController::class, 'Product_page']);
Route::get('/Product-info', [HomeController::class, 'Product_info']);
Route::post('/postComment', [HomeController::class, 'postComment']);

Route::get('/dashboard', [AdminController::class, 'index']);
// -------------------------------- Services -------------------------
Route::get('/all-services', [ServiceController::class, 'index']);
Route::post('/add-services', [ServiceController::class, 'add']);
Route::post('/update-services', [ServiceController::class, 'update']);
Route::get('/delete-services', [ServiceController::class, 'delete']);

// -------------------------------- Products -------------------------
Route::get('/all-product', [PrudectController::class, 'index']);
Route::post('/add-product', [PrudectController::class, 'add']);
Route::post('/update-product', [PrudectController::class, 'update']);
Route::get('/delete-product', [PrudectController::class, 'delete']);

// -------------------------------- images ------------------------
Route::get('/product-img', [PrudectController::class, 'img']);
Route::post('/add-img', [PrudectController::class, 'add_img']);
Route::post('/update-img', [PrudectController::class, 'update_img']);
Route::get('/delete-image', [PrudectController::class, 'delete_img']);

// --------------------------- auth --------------
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/signup', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile_add', [ProfileController::class, 'store']);
Route::post('/profile_add_pass', [ProfileController::class, 'store_pass']);

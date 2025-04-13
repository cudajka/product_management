<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Vào dashboard
Route::get('/admin/index', [DashboardController::class, 'index'])->name('admin.index');

//CRUD sản phẩm
Route::resource('/admin/products', ProductController::class);

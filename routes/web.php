<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\SizeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {return view('users.home.index');});

//Vào dashboard
Route::get('admin', [DashboardController::class, 'index'])->name('admin.index');

Route::prefix('admin/products-manager/')->group(function () {
    //CRUD sản phẩm
    Route::resource('products', ProductController::class);

//CRUD danh mục sản phẩm
    Route::resource('product_categories', ProductCategoryController::class);

//CRUD size
    Route::resource('sizes', SizeController::class);

//CRUD màu sắc
    Route::resource('colors', ColorController::class);

//CRUD thương hiệu
    Route::resource('brands', BrandController::class);

    Route::resource('product_variants', ProductVariantController::class);

});

Route::delete('admin/mass-delete', [ProductController::class, 'massDelete'])->name('products.massDelete');

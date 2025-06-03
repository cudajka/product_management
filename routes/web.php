<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductVariantController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SizeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// Front-End
Route::get('/', [\App\Http\Controllers\LandingPage\HomeController::class, 'index'])->name('home');

Route::get('/san-pham', [\App\Http\Controllers\LandingPage\ProductController::class, 'index'])->name('landing_page.products.index');
Route::get('/san-pham/{id}', [\App\Http\Controllers\LandingPage\ProductController::class, 'show'])->name('landing_page.products.show');


// Admin
// Đăng nhập đăng ký admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');

Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register.post');

// Thông tin người dùng
Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile.index');

Route::post('/admin/profile', [ProfileController::class, 'changePassword'])->middleware(['auth'])->name('admin.password.update');

Route::group(['middleware' => 'auth'], function () {
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
});

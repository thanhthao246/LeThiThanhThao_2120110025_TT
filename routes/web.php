<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\SiteController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;



Route::get('/', [SiteController::class, 'index'])->name('site.home');


//khai báo route cho trang quan lí
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('brand', BrandController::class);
    //category
    Route::resource('category', CategoryController::class);
    route::get('category_trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::prefix('category')->group(function () {
        route::get('status/{category}', [CategoryController::class, 'status'])->name('category.status');
        route::get('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
        route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
        route::get('destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    //brand
    Route::resource('brand', BrandController::class);
    route::get('brand_trash', [BrandController::class, 'trash'])->name('brand.trash');
    Route::prefix('brand')->group(function () {
        route::get('status/{brand}', [BrandController::class, 'status'])->name('brand.status');
        route::get('delete/{brand}', [BrandController::class, 'delete'])->name('brand.delete');
        route::get('restore/{brand}', [BrandController::class, 'restore'])->name('brand.restore');
        route::get('destroy/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
    });
    Route::resource('product', ProductController::class);
});

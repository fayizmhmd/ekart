<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\HomepageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomepageController::class, 'home'])->name('home');



Route::name('admin.')->group(function () {
    Route::get('admin/login', [LoginController::class, 'login'])->name('login.form');
    Route::post('admin/login', [LoginController::class, 'doLogin'])->name('login');

    
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/logout', [LoginController::class, 'logout'])->name('logout');

    Route::name('products.')->prefix('admin/products')->group(function () {
        Route::get('/', [ProductController::class, 'list'])->name('list');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('save', [ProductController::class, 'save'])->name('save');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('update', [ProductController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');

    });
});

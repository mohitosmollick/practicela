<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class, 'index'])->name('index');
Route::get('/post',[SiteController::class,'singlePost']);

//Register form


Route::prefix('/user')->name('user.')->group(function (){
    Route::get('/register',[SiteController::class,'register'])->name('register');
    Route::post('register',[SiteController::class,'registation'])->name('registation');
    Route::get('login',[SiteController::class,'login'])->name('login');
    Route::post('login',[SiteController::class,'loginform'])->name('loginform');
    Route::get('logout',[SiteController::class,'logout'])->name('logout');
});

Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function (){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::prefix('/category')->name('category.')->group(function (){
        Route::get('/index',[CategoryController::class,'index'])->name('index');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/store',[CategoryController::class,'store'])->name('store');
        Route::get('/{id}',[CategoryController::class,'show'])->name('show');
        Route::get('/{id}/edit',[CategoryController::class,'edit'])->name('edit');
        Route::put('/{id}/update',[CategoryController::class,'update'])->name('update');
        Route::delete('/{id}',[CategoryController::class,'destroy'])->name('destroy');
    });

});


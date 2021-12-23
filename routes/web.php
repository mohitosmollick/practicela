<?php

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
});

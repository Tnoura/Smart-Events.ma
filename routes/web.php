<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SmartController;

Route::get('/' ,[SmartController::class , 'home'])->name('home');
Route::get('/about' ,[SmartController::class , 'about'])->name('about');
Route::get('/salons', [SmartController::class, 'salons'])->name('salons');
Route::get('/post/{slug}', [SmartController::class, 'show'])->name('post.show');
Route::get('/gallery' ,[SmartController::class , 'gallery'])->name('gallery');
Route::get('/contact' ,[SmartController::class , 'contact'])->name('contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

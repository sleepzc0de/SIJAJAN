<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GalleryFoodController;

Route::get('/home', function () {
    return view('content.home');
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'autentication']);

Route::get ('/contact',[MailController::class,'contact']);


Route::get('/order', [OrderController::class, 'order']);
Route::get('/gallery', [GalleryFoodController::class, 'gallery']);

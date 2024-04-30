<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome',[
        "title" => "home"
    ]);
});

route::resource('daftarmenu', DrinkController::class)->middleware('guest');

route::get('/popular', function () {
    return view('menupopular',[
        "title" => "menupopuler"
    ]);
});

route::resource('category', CategoryController::class)->middleware('guest');

route::get('/login', function () {
    return view('login.index',[
    "title" => "Login"
    ]);
});
route::get('/regis', function () {
    return view('register',[
        "title" => "Registerasi"
    ]);
});
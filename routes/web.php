<?php

use App\Http\Controllers\AdminDrinkController;
use App\Http\Controllers\AdminCategoryController;

use App\Models\Category;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\BackendDrinkContrllor;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SetingController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome',[
        "title" => "home"
    ]);
}); 

Route::get('/category',function(){
    return view ('category', [
        'title' =>'Categories',
        'category' => Category::all()
    ]);
});

Route::get('/daftarmenu', [DrinkController::class, 'index'])->name('drink.index');

Route::get ('/drink/{id}', [DrinkController::class, 'show'])->name('drink.show');

Route::get('/popular', [PopularController::class, 'index'])->name('popular.index');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register', [RegistrasiController::class,'index'])->middleware('guest');

Route::post('/register', [RegistrasiController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::resource('/menu', BackendDrinkContrllor::class )->middleware('auth');

Route::get('/order/{id}', [OrderController::class,'show'])->name('order.show');

Route::resource('/profil', ProfilController::class)->Middleware('auth');

Route::resource('/seting', SetingController::class)->Middleware('auth');

Route::resource('/admin/drink',AdminDrinkController::class)->except('show');

Route::resource('/admin/category',AdminCategoryController::class)->except('show')->middleware('admin');


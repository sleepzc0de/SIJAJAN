<?php

use App\Models\Category;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegistrasiController;

Route::get('/', function () {
    return view('welcome',[
        "title" => "home"
    ]);
}); 

// route::resource('daftarmenu', DrinkController::class)->middleware('guest');
// route::resource('daftarmenu/{{$category}}', DrinkController::class)->middleware('guest');
Route::get('/daftarmenu', [DrinkController::class, 'index'])->name('drink.index');

Route::get ('/detailmenu/{id}', [DrinkController::class, 'show'])->name('drink.show');

route::get('/popular', function () {
    return view('menupopular',[
        "title" => "menupopuler"
    ]);
});

route::get('/category',function(){
    return view ('category', [
        'title' =>'Categories',
        'category' => Category::all()
    ]);
});

route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/login',[LoginController::class,'authenticate']);

route::post('/logout',[LoginController::class,'logout']);

Route::get('/register', [RegistrasiController::class,'index'])->middleware('guest');
Route::post('/register', [RegistrasiController::class,'store']);
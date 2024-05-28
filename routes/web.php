<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('content.home');
})->name('home');
    Route::controller(AuthController::class)->group(function(){
        Route::get('register',  'register')->name('register');
        Route::post('register', 'registersave')->name('register.save');
        Route::get('login',   'login')->name('login');
        Route::post('login',  'loginaction')->name('login.action');
        Route::post('logout', 'logout')->name('logout');

    });

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('payment', function(){
        return view('payment');
    })->name('payment');

    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');

    Route::controller(ProductController::class)->prefix('product')->group(function(){
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'ProductController@destroy')->name('products.destroy');

});

Route::resource('products', ProductController::class);

Route::get('/order', [OrderController::class, 'order'])->name('order');
Route::get('/order/{id}',  [OrderController::class, 'addFoodtoCart'])->name('addfood.to.cart');
Route::get('/shopping-cart',[OrderController::class, 'foodcart'])->name('shopping.cart');
Route::delete('/delete-cart-product', [OrderController::class, 'deleteproduct'])->name('delete.cart.product');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'SuccessPage'])->name('checkout.success');


Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/{id}', [GalleryController::class, 'show'])->name('galleries.show');

Route::get('/data', [App\Http\Controllers\AuthController::class, 'data'])->name('data');

Route::get('/reports', [ReportController::class, 'index'])->name('reports');

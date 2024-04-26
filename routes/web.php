<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/daftarmenu', function () {
    return view('daftarmenu');
});

route::get('/popular', function () {
    return view('menupopular');
});

route::get('/review', function () {
    return view('review');
});

route::get('/login', function () {
    return view('login.index');
});
route::get('/regis', function () {
    return view('register');
});
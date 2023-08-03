<?php

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

Route::get('/', function () {
    return view('front.home.home');
});

Route::get('/login', function(){

    return view('front.auth.login');
});

Route::get('/restaurant', function(){

    return view('front.restaurant.restaurant');
});

Route::get('/services', function(){

    return view('front.services.services');
});


Route::get('/business', function () {
    return view('front.business.index');
});
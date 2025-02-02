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
    return view('history');
});

Route::resource('/product', 'App\Http\Controllers\ProductController');
Route::resource('/order', 'App\Http\Controllers\OrderController');
Route::resource('/history', 'App\Http\Controllers\HistoryController');
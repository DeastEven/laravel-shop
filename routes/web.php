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
    return view('layouts.main');
});
Route::group(['namespace'=>'App\Http\Controllers\Product'],function (){
    Route::get('/product','IndexController')->name('product.index');
});

//admin
Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin'],function (){
    Route::get('/','IndexController')->name('admin.index');

    Route::group(['namespace'=>'Category','prefix'=>'category'],function (){
        Route::get('/','IndexController')->name('admin.category.index');
        Route::get('/create','CreateController')->name('admin.category.create');
        Route::post('/','StoreController')->name('admin.category.store');
    });
});

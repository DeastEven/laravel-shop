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

//admin
Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin'],function (){
    Route::get('/','IndexController')->name('admin.index');

    Route::group(['namespace'=>'Category','prefix'=>'category'],function (){
        Route::get('/','IndexController')->name('admin.category.index');
        Route::get('/create','CreateController')->name('admin.category.create');
        Route::post('/','StoreController')->name('admin.category.store');
        Route::get('/{category}','ShowController')->name('admin.category.show');
        Route::get('/{category}/edit','EditController')->name('admin.category.edit');
        Route::patch('/{category}','UpdateController')->name('admin.category.update');
        Route::delete('/{category}','DeleteController')->name('admin.category.delete');
    });
    Route::group(['namespace'=>'Product','prefix'=>'product'],function (){
        Route::get('/','IndexController')->name('admin.product.index');
        Route::get('/create','CreateController')->name('admin.product.create');
        Route::post('/','StoreController')->name('admin.product.store');
        Route::get('/{product}','ShowController')->name('admin.product.show');
        Route::get('/{product}/edit','EditController')->name('admin.product.edit');
        Route::patch('/{product}','UpdateController')->name('admin.product.update');
        Route::delete('/{product}','DeleteController')->name('admin.product.delete');
    });
});

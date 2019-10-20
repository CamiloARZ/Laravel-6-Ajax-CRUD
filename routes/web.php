<?php

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
    return view('welcome');
});

// POST 
Route::post('product-list/store', 'ProductController@store')->name('store');

// GET 
Route::get('product', 'ProductController@index')->name('list');
Route::get('product/{id}/edit', 'ProductController@edit')->name('edit');
Route::get('product/delete/{id}', 'ProductController@destroy')->name('destroy');
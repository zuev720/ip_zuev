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


Route::get('/', 'MainController@index')->name('index');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/products', 'MainController@products')->name('products');
Route::get('/product/{id}', 'MainController@getProduct')->name('getProduct');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/basket', 'OrderController@basket')->name('basket');
Route::get('/basket/place', 'OrderController@basketPlace')->name('basket-place');
Route::post('/basket/place', 'OrderController@basketConfirm')->name('basket-confirm');
Route::post('/basket/add/{id}', 'OrderController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'OrderController@basketRemove')->name('basket-remove');
Route::post('/basket/delete/{id}', 'OrderController@deleteProduct')->name('product-remove');



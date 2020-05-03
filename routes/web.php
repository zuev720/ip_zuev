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
Route::get('/about', 'MainController@about')->name('about');


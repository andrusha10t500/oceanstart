<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', 'ProductController@index');  //show all products
Route::get('/products/{product}', 'ProductController@show');  //show all products
Route::post('/products','ProductController@store');

Route::put('/products/{product}', 'ProductController@update');

Route::delete('/products/{product}', 'ProductController@delete');

Route::get('/category', 'CategoryController@index');

Route::get('/category/{category}', 'CategoryController@show');

Route::post('/category', 'CategoryController@store');

Route::put('/category/{category}', 'CategoryController@update');

Route::delete('/category', 'CategoryController@delete');
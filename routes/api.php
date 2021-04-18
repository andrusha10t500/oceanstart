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
Route::get('/products/{products}', 'ProductController@show');  //show all products
Route::post('/products','ProductController@store');

Route::put('/products/{products}', 'ProductController@update');

Route::delete('/products/{products}', 'ProductController@delete');
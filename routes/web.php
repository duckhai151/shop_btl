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

Route::get('/', 'HomeController@index');
Route::get('contact', 'HomeController@contact');
Route::get('category/{id}', 'ProductController@getProductsByCategory');
Route::get('product/detail/{id}', 'ProductController@detail');
Route::get('product/index', 'ProductController@index');
Route::get('product/search', 'ProductController@getProductsByKey');

Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');
Route::post('register', 'LoginController@postRegister');

Route::prefix('cart')->group(function () {
    Route::get('/', 'CartController@index');
    Route::post('/', 'CartController@postCart');
    Route::get('delete/{key}', 'CartController@deleteItem');
    Route::post('checkout', 'CheckoutController@checkout');
    Route::post('confirm', 'CheckoutController@confirm');
});


Route::post('comment', 'CommentController@postComment');
Route::get('test', 'CartController@postCart');


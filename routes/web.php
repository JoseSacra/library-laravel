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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('add_book', ['as' => 'addbook', 'uses' => 'HomeController@create']);
Route::post('register', ['as' => 'register', 'uses' => 'HomeController@store']);
Route::get('add_user', ['as' => 'adduser', 'uses' => 'UserController@create']);
Route::post('register_user', ['as' => 'registeruser', 'uses' => 'UserController@store']);
Route::get('add_category', ['as' => 'addcategory', 'uses' => 'CategoryController@create']);
Route::post('register_category', ['as' => 'registercategory', 'uses' => 'CategoryController@store']);
Route::post('find_book', ['as' => 'findbook', 'uses' => 'HomeController@show']);
Route::post('edit_book', ['as' => 'editbook', 'uses' => 'HomeController@show']);
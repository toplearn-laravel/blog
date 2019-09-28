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

// Route::get('/category' , 'CategoryController@index');
// Route::get('/category/create' , 'CategoryController@create');
// Route::post('/category' , 'CategoryController@store');
// Route::get('/category/show/{id}' , 'CategoryController@show');
// Route::get('/category/edit/{id}' , 'CategoryController@edit');
// Route::put('/category/update/{id}' , 'CategoryController@update');
// Route::delete('/category/destroy/{id}' , 'CategoryController@destroy');

Route::resource('/category', 'CategoryController');




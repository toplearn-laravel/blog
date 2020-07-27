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

Route::get('/' , 'HomeController@index');

// Route::get('/test' , 'HomeController@test')->middleware('age');

// Route::prefix('admin')->middleware('age')->group(function () {

// });



Route::resource('post', 'PostController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

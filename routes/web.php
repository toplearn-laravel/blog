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


Auth::routes();

// Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/' , 'HomeController@index');


// Route::namespace('Admin')->prefix('admin')->group(function () {
//     Route::get('/', 'HomeController@index')->name('admin.home');
//     Route::namespace('Auth')->group(function () {
//         Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
//         Route::post('/login', 'LoginController@login');
//         Route::post('logout', 'LoginController@logout')->name('admin.logout');
//     });
// });


Route::resource('post', 'PostController');
// Route::get('/refueling', 'CarController@calc');




Route::get('/home', 'HomeController@index')->name('home');

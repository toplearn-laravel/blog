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


Route::resource('/category', 'CategoryController');

Route::post('something-you-can-not-do' , function(){
  abort(403, 'Unauthorized.', $headers);
  abort_unless(Auth::user()->isAdmin(), 403);
  abort_if(Auth::user()->isBanned(), 403);
});



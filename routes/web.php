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


Route::get('/', function(){
    // return view('welcome')->with('var' , 'test');
    // return view('welcome',['var'=>'test']);
    // $var = 'test';
    return view('welcome', compact('var'));
});

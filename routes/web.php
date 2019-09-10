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


// Route::domain('test.myapp.com')->group(function (){
//     Route::get("/" , function(){
//         return "hi";
//     });
// });




// Route::domain('{account}.myapp.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     });
// });




// Route::get('/', 'UsersController@index');
// Route::namespace('Dashboard')->group(function () {
//  Route::get('dashboard/purchases', 'PurchasesController@index');
// });


// Route::name('admin.')->group(function () {
//     Route::get('users', function () {
//     })->name('users');
// });

// Route::fallback(function(){
//     return "hi";
// });

Route::get('/', function(){
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});

<?php

use Illuminate\Support\Str;
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


Route::fallback(function () {
    return response()->json([
        'msg' => 'Route Not Found',
    ],404);
});


// Route::post('login', function (Request $request){
//     if(auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
//         $user = auth()->user();
//         $user->api_token = Str::random(60);
//         $user->save();
//         return $user;
//     }
//     return response()->json([
//         'error' => 'Unauthenticated user'
//     ],401);
// });


// Route::middleware('auth:api')->post('logout', function (Request $request){
//     if(auth()->user()){
//         $user = auth()->user();
//         $user->api_token = null;
//         $user->save();
//         return response()->json([
//             'msg' => 'thank you for using this application'
//         ]);
//     }
//     return response()->json([
//         'error' => 'unable to logout user'
//     ],401);

// });


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::namespace('Api')->group(function () {
//   Route::apiResource('posts', 'ApiPostsController');
// });


Route::prefix('/user')->group(function () {
    Route::post('/login', 'api\auth\LoginController@login');
    Route::get('/all', 'api\ApiUserController@all')->middleware('auth:api');
});

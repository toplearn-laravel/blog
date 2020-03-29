<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    public function index()
    {

        // $user = User::where('id', 4)->get()->first();
        // $users = User::orderBy('id', 'asc')->take(10)->get();

        // $user = User::where('id', 4)->get()->first();

        // $freshUser = $user->fresh();

        //  $user = User::where('id', 3)->get()->first();

        //  $user->name = 'nima';

        // $user->refresh();

        // $users = User::find([
        //     3,4,5
        // ]);
    //         try{
    //               $user = User::findOrfail(1);
    //         }
    //         catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){

    //             return response()->json('رکورد  موردنظر پیدا نشد', 500, [], JSON_UNESCAPED_UNICODE);

    //         }
    //     return view('welcome', compact('user'));
    // }


    // User::chunk(40, function($users){
    //     foreach($users as $user){
    //         dd($users);
    //     }
    // });


        }
}

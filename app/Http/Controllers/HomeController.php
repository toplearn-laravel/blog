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

      // $result = false;
      //
      // $users = DB::table('users')->when($result, function($query){
      //   return $query->where('id', 1);
      // })->get();

      // $users = DB::table('password_resets')->first();

      // $users = DB::table('users')->first()->id;

      // $users = DB::table('users')->where('id', 1)->orWhere('id', 2)->count();


      // $users = DB::table('users')->max('id');


      // $users = DB::table('users')->avg('id');

       dd($users);
        return view('welcome');
    }
}

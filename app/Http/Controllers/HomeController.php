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
    //    $users = DB::table('users')->whereBetween('id', [1,10])->get();
    //    $users = DB::table('users')->whereNotBetween('id', [1,10])->get();
    //    $users = DB::table('users')->whereIn('id', [1, 10, 55, 33])->get();
    //    $users = DB::table('users')->whereNotIn('id', [1, 10, 55, 33])->get();
    //    $users = DB::table('users')->whereNull('updated_at')->get();
    //    $users = DB::table('users')->whereNotNull('updated_at')->get();
    //    $users = DB::table('users')->whereDate('updated_at', '2020-02-15')->get();
    //    $users = DB::table('users')->whereColumn(['name', '<>', 'email'])->get();
    //    $users = DB::table('users')->where('id', 1)->orWhere('id', 2)->get();
       $users = DB::table('users')->where('id', 1)->where(function ($query){
           $query->where('name', 'آرام کاشی')->orWhere('email', 'pebrahimi@example.com');
       })->get();

    //    select * from users where id = 1 and (name = آرام کاشی Or email = pebrahimi@example.com)

       dd($users);
        return view('welcome');
    }
}

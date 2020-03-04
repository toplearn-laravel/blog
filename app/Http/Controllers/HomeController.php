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


        // $users = DB::table('posts')->join('users', 'users.id', 'posts.user_id')->get();
        // $first =  DB::table('users')->whereNull('updated_at');

        // $users = DB::table('users')->orderBy('id', 'asc')->get();
        // $users = DB::table('users')->latest()->first();
        // $users = DB::table('users')->inRandomOrder()->first();
        // $users = DB::table('users')->take(5)->get();
        // $users = DB::table('users')->skip(10)->take(5)->get();
        // $users = DB::table('users')->offset(10)->limit(5)->get();

        // $users = DB::table('posts')->groupBy('user_id')->select('user_id', DB::raw('count(*) as total'))->get();

       dd($users);
        return view('welcome');
    }
}

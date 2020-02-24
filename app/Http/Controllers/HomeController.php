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
        $test = collect(['hassan', 'ali', 'hossein']);
    //    $users = DB::table('users')->select('email')->get();
    //    $users = DB::table('users')->where('email', 'hormoz56@example.net')->where('name', 'آرام کاشی')->get();
    //    $users = DB::table('users')->where([
    //        ['email', 'hormoz56@example.net'],
    //        ['name', 'آرام کاشی'],
    //    ])->get();
    //    $users = DB::table('users')->where('email', 'hormoz56@example.net')->orWhere('name', 'آمنه منوچهری')->get();

       dd($test);
        return view('welcome');
    }
}

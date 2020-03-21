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
        $user = User::find(2);
        dd($user);
        return view('welcome');
    }



    public function showUser(User $user){

        dd($user);

    }
}

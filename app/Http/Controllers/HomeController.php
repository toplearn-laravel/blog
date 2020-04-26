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


        $user = new User;
        $user->first_name = 'HASSAN';
        $user->password = '12345678';
        $user->save();

        return view('welcome');


        }
}

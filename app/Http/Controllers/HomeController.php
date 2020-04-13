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


        // Post::create(['title' => 'Flight 10', 'user_id' => 12]);

        return view('welcome');


        }
}

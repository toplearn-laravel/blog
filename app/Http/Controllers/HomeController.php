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


      $posts = Post::all();
      dd($posts);

        return view('welcome');


        }
}

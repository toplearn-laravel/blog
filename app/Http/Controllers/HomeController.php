<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
      $user = factory(Post::class, 10)->create();
        return view('welcome');
    }
}

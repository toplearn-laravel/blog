<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Address;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    public function index()
    {

      $user = User::find(57);
      dd($user->info);

        return view('welcome');


        }
}

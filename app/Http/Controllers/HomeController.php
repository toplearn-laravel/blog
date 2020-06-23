<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Address;
use App\Comment;
use App\Country;
use App\Image;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    public function index()
    {



        return view('welcome');


        }
}

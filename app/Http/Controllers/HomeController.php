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

        // $post = new Post;
        // $post->user_id = 12;
        // $post->title = 'salam2';
        // $post->status = '1';
        // $post->save();

        $post = Post::all();
        // dd($post);
        // dd($post->toArray());
        // dd($post->toJson());



        return view('welcome');


        }
}

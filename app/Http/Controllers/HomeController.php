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

        // $post = Post::firstOrCreate(
        //     ['title' => 'fifth updated title2',]
        // );

        // dd($post);


        // $post = Post::find(105);
        // $post->delete();


        // $post = Post::find(105);
        // $post->delete();


        // Post::destroy([102,100]);

        // Post::where('user_id', 34)->delete();
        // $posts = Post::withTrashed()->get();
        // $posts = Post::onlyTrashed()->restore();
        // $posts = Post::onlyTrashed()->forceDelete();

        // dd($posts);

        return view('welcome');


        }
}

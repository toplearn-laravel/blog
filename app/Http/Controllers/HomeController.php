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

    //    $post = new Post;
    //    $post->title = 'salam in title ast';
    //    $post->user_id = 15;
    //    $post->save();

        // $post = new Post([
        //    'title' => 'salam in title ast',
        //   'user_id' => 20,
        // ]);
        // $post->save();


        // $post = Post::make([
        //    'title' => 'salam in title ast',
        //   'user_id' => 20,
        // ]);
        // $post->save();

            // $post = Post::create([
            //  'title' => 'salam in title ast',
            //   'user_id' => 22,
            //  ]);

         return 'ho';


        return view('welcome');


        }
}

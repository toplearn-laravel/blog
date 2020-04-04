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

    //    $post = Post::find(102);
    //    $post->title = 'updated title';
    //    $post->save();

    // Post::where('id', 102)->update([
    //     'title' => 'second updated title'
    // ]);

        //  $post = Post::find(102);
        //  $post->update([
        //         'title' => 'third updated title'
        //     ]);

        // $post = Post::where('created_at', '<',  now())->count();
        // $post = Post::where('created_at', '<',  now())->avg('id');

        // dd($post);



        return view('welcome');


        }
}

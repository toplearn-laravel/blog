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

    //    $posts = Post::all(); Select * from posts

    //    foreach($posts as $post){
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 2
    //        $post->comments; Select * from comments where post_id = 3
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //        $post->comments; Select * from comments where post_id = 1
    //    }

            // $posts = Post::with('comments')->get();
                        // dd($posts[19]->comments);
            // $posts = Post::with(['comments', 'author'])->get();
            // $posts = Post::withCount(['comments'])->get();
            //                         dd($posts[19]);
            // $posts = Post::with(['comments', 'comment.user'])->get();
            $posts = Post::with('comments:body')->get();
        //     $posts = Post::with(['comments' => function ($query){
        //         $query->where('id', 2);
        //     }])->get();
        //    dd($posts[19]->comments);

        // select * from posts;
        // select * from comments where post_id IN (1,2,3,4,5, ...)


            // $posts = Post::all();

            // if ($someCondition){
            //     $posts->load('comments');
            // }
            // $post = Post::find(122);
            // $post->loadMissing('comments');
            // dd($post);


        }
}

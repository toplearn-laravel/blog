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

        // $comment = Comment::find(1);
        // $post = Post::find(122);
        // $post = Post::has('comments')->get();
        // $comment = Comment::find(4);
        // $comment->post()->associate(Post::first());
        // $comment->save();
        // $comment = Comment::find(4);
        // $comment->post()->dissociate();
        // $comment->save();
        // $post = Post::find(122);
        // dd($post->comments()->where('id', 2)->get());

        return view('welcome');


        }
}

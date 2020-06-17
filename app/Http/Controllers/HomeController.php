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

        // $post = Post::find(122);

        // $comment = new Comment;
        // $comment->body = 'bah bah';
        // $post->comments()->save($comment);


        // $post = Post::find(122);
        // dd($post->tags);
        // $video = Video::find(1);
        // dd($video->tags);

        // $tag = Tag::find(1);
        // dd($tag->posts);

        }
}

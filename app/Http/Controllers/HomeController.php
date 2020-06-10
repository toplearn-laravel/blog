<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Address;
use App\Comment;
use App\Country;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    public function index()
    {


    //    $post = Post::find(125);
    //    dd($post->tags);
    // $tag = Tag::find(2);
    // dd($tag->posts);
    $post = Post::find(126);
    // $post->tags()->attach(1);
    // $post->tags()->detach(2);
    // $post->tags()->sync(2);
    // $post->tags()->attach(array(1,2));
    // dd($post->tags->first()->pivot->value);
    // dd($post->tags->first());




        }
}

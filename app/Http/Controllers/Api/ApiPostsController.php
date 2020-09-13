<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ApiPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return new PostCollection(Post::with('comments')->get());
        // return new PostCollection(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Post::create(['title' => 'api', 'user_id' => 55]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::findOrfail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrfail($id);
        $post->update($request->only(['title']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrfail($id)->delete();
        // return response('Success', 200)->header('Content-Type', 'text/plain');
        // return response()->json([
        //     'status' => 200,
        //     'msg' => 'Success'
        // ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\Rules\Uppercase;
use App\Jobs\ProcessPost;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $posts = Post::orderBy('id', 'DESC')->get();
      return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        // $pdf = Storage::putFileAs('pdf', $request->file('pdf'), time().'.'.$request->file('pdf')->getClientOriginalName());
       $post = Post::create([
             'title' => $request->title,
             'user_id' => $request->user_id,
             'image' => 'images/'.$imageName,
            //  'pdf' => $pdf
         ]);
        //  ProcessPost::dispatch($post)->delay(now()->addMinutes(1));
         ProcessPost::dispatchNow($post);

        return redirect()->route('post.index')->with('success', 'record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        if($post->pdf != null)
        return Storage::download($post->pdf);
        return view('post.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('post.edit');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', 'record deleted successfully');

    }
}

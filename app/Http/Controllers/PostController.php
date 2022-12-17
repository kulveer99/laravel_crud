<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }

    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post->post_title=$request->get('post_title');
        $post->post_auther=$request->get('post_auther');
        $post->save();

        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts=Post::all();

        return view('show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,$id)
    {
        $posts=Post::find($id);
        return view('edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post,$id)
    {
         $posts=Post::find($id);
         $posts->post_title=$request->get('post_title');
          $posts->post_auther=$request->get('post_auther');

          $posts->save();

          return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,$id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect('show');

    }
}
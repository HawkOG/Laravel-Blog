<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog_theme.pages.home');
    }


    public function indexx(){
        $posts = POST::paginate(3);

        return view('blog_theme.pages.home', compact('posts'));
    }


        




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog_theme.pages.AddPost');
    }

    public function addcat(){
        return view('blog_theme.pages.AddCategory');
    }

    public function createCat(){
        Post::create([
            'category_title' => request('cattitle'),
        ]);
        return redirect('/');
    }

     public function store(){
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
     
    public function show(Post $post)
    {   
        return view('blog_theme.pages.FullPost', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('blog_theme.pages.Edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }



}


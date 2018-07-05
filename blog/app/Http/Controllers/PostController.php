<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = \App\Post::latest()->get();
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        // $post = new \App\Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        \App\Post::create(request(['title', 'body']));
        //Post::create([
        //    'title' => request('title'),
        //    'body' => request('body')
        //]);

        return redirect('/');
    }
}

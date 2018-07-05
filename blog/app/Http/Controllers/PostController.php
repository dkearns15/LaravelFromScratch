<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(){
        return view('posts.show');
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
        Post::create(request(['title', 'body']));
        //Post::create([
        //    'title' => request('title'),
        //    'body' => request('body')
        //]);

        return redirect('/');
    }
}

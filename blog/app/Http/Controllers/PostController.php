<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(){

        $posts = \App\Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        $archives = \App\Post::archives();

        return view('posts.index', compact('posts'));
    }
    public function show(\App\Post $post){
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

        auth()->user()->publish(new \App\Post(request(['title', 'body'])));

        // \App\Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);

        //Post::create([
        //    'title' => request('title'),
        //    'body' => request('body')
        //]);

        return redirect('/');
    }
}

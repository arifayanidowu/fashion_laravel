<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;




class PostsController extends Controller
{
    public function create(){

        $posts = Post::all();

        return view('posts.create', compact('posts'));
    }

    public function store() {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $posts = Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/display')->with('this','posts');
    }

     public function show() {
        
        $post = Post::select('select * from posts');

        return view('posts.display', compact('post'));
    } 
}


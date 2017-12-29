<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;



class PostsController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('posts.view', compact('posts'));
    }

    /* public function display(){

        return view('posts.display');
    } */

    public function create() {
        
        return view('posts.create');
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

        redirect('/posts/display');
    }

    public function show() {
        $posts = Post::all();

        return view('posts.display', compact('posts'));
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $page_title = 'Posts List';
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts', 'page_title'));
    }

    public function show(Post $post) {
        $page_title = $post->title;
        return view('posts.show', compact('post', 'page_title'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post();
        $post->title = request()->title;
        $post->description = request()->description;
        $post->body = request()->body;

        $post->save();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts)
    {
        $data = [
            'page_title' => 'Here is the list',
            'created_at' => '',
            'author' => ''
        ];


//        $posts = Post::latest()->filter(request(['month', 'year']))->get();
        $posts = $posts->all();

        return view('posts.index', compact('posts', 'page_title', 'data'));
    }

    public function show(Post $post)
    {
        $data = [
            'page_title' => $post->title,
            'created_at' => $post->created_at->toFormattedDateString(),
            'author' => $post->user->name
        ];
        return view('posts.show', compact('post', 'data'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        auth()->user()->publish(new Post(request(['title', 'description', 'body'])));

        return redirect('/');
    }
}

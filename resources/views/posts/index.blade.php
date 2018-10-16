@extends('layout')


@section('content')
    @include('layouts.hero')
    <div class="content">
        @foreach($posts as $post)
            <div class="post">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->created_at->toFormattedDateString()}}</p>
                <p>{{$post->description}}</p>
            </div>
        @endforeach
    </div>

@endsection

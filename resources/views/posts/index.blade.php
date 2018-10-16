@extends('layout')


@section('content')
    @include('layouts.hero')
    <div class="content">
        @foreach($posts as $post)
            <div class="post">
                <div class="post__media">
                    <img src="/images/ComicstoRead_10.jpg"/>
                </div>
                <div class="post__content">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <p>{{$post->created_at->toFormattedDateString()}}</p>
                    <p>{{$post->description}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection

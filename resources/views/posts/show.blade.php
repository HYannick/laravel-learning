@extends('layout')


@section('content')
    @include('layouts.hero')
    <div class="content">
        <p class="description">{{$post->description}}</p>
        <p>{{$post->body}}</p>
        @if (count($post->tags))
            @foreach ($post->tags as $tag)
                <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>
            @endforeach
        @endif
    </div>
    <div class="comments">
        <h4>Comments</h4>
        <hr>
        @foreach($post->comments as $comment)
            <article>
                <b>{{$comment->created_at->diffForHumans()}}</b> ::
                {{$comment->body}}
            </article>
        @endforeach
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{csrf_field()}}
            <div class="form-group">
                <label for="comment">Comment content</label>
                <textarea id="comment" placeholder="Content" name="body" required></textarea>
            </div>
            @include('layouts.errors')
            <button type="submit">Comment</button>
        </form>
    </div>

@endsection

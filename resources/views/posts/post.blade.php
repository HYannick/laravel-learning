@extends('layout')


@section('content')
    @include('layouts.hero')
    <div class="content">
        <p class="description">{{$post->description}}</p>
        <p>{{$post->body}}</p>
    </div>

@endsection

@extends('layout')

@section('content')
    <h2>Create a post.</h2>
    <hr>
    <form method="POST" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Post Title</label>
            <input id="title" placeholder="Title" name="title" type="text">
        </div>
        <div class="form-group">
            <label for="description">Post description</label>
            <textarea id="description" placeholder="Description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="body">Post Content</label>
            <textarea id="body" placeholder="Content" name="body"></textarea>
        </div>
        @include('layouts.errors')
        <button type="submit">Publish</button>
    </form>
@endsection

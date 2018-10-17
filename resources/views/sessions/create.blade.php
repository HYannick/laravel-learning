@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h1>Signin</h1>

        <form method="POST" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email">Email::</label>
                <input id="email" placeholder="Email" name="email" required type="email"/>
            </div>

            <div class="form-group">
                <label for="password">Password::</label>
                <input id="password" placeholder="Password" name="password" required type="password"/>
            </div>

            @include('layouts.errors')
            <button type="submit">Login</button>
        </form>
    </div>
@endsection

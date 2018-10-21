<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
@include('layouts.nav')
@if ($flash = session('message'))
    <div class="alert alert-success" role="alert">
        {{$flash}}
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-9">
            @yield('content')
        </div>
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>

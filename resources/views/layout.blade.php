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
<div class="flex-center position-ref full-height">
    @yield('content')
</div>
@include('layouts.footer')
</body>
</html>

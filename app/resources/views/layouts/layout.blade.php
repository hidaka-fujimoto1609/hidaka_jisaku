<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('stylesheet')
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-expand-md bg-white ">
<div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    KENTIKU管理
                </a>
                <div class="text-center">
                    <a href="{{route('sinkoutyu')}}">
                    進行中現場
                </a>
                   </div>
                </div>
</nav>
@yield('content')
</div>
</body>
</html>
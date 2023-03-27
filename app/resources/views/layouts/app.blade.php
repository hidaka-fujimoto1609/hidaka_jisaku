<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KENTIKU管理') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modal.js') }}" defer></script>
    <!-- Styles bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/67fc42cf07.css" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='{{ asset('fullcalendar-5.9.0/lib/main.css') }}' rel='stylesheet' />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                KENTIKU管理
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin_register') }}">管理者新規登録</a>
                                </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <!--<button class='btn1'  type="button"   onclick="location.href='{{route('member.index')}}'"> 依頼受託</button>-->

                    <!--<button type="button" class="btn btn-outline-primary" style="margin-rigth:30rem"><a href="{{route('resource.create')}}">進行中現場リスト</a></button>
                    <button type="button" class="btn btn-outline-primary" ><a href="{{route('personallist.index')}}">人員</a></button>-->
                    @can ('admin_only')
                    <button  class="btn btn-outline-primary"  type="button"  onclick="location.href='{{route('resource.create')}}'">進行中現場リスト</button>
                    <button  class="btn btn-outline-primary"  type="button"  onclick="location.href='{{route('personallist.index')}}'">人員</button>
                    @elsecan('user_only')
                    <button class='btn btn-outline-primary'  type="button"   onclick="location.href='{{route('accept.create')}}'"> 依頼受託</button>

                    <button  class="btn btn-outline-primary"  type="button"  onclick="location.href='{{route('resource.create')}}'">進行中現場リスト</button>

                    <button  class="btn btn-outline-primary"  type="button"  onclick="location.href='{{route('member.index')}}'">会員情報</button>
                    @endcan
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    
        <main class="py-4">
       
            @yield('content')
        </main>
</body>
</html>

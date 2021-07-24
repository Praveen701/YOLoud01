<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: #FEFAE1">
    <div id="app">
        @auth
        <nav class="navbar-cus navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="btn btn-light"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav-cus scroll">
                    <profile :profile="{{ Auth::user() }}"></profile>

                    <li class="li-items mx-auto mt-5 d-flex align-items-center justify-content-center" style="flex-direction:column">

                    </li>
                  
                    <li class="link-items @if(Request::is('home')) actives @endif">
                         <a href="/home" class="nav-links"> <i class="fas fa-chart-pie"></i>  Dashboard</a>
                    </li>
                    <li class="link-items @if(Request::is('campaign')) actives @endif">
                        <a href="/campaign" class="nav-links"> <i class="fas fa-users"></i>  Campaigns</a>
                    </li>
                    <li class="link-items @if(Request::is('settings')) actives @endif">
                        <a href="/settings" class="nav-links"> <i class="fas fa-user-alt"></i> My Profile</a>
                    </li>

                    <li class="link-items">
                       <a class="nav-links" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>


                </ul>
            </div>
        </nav>
        @endauth

        <main class="@auth main @endauth py-2">
            @if(Session::has('status'))
                <div class="alert alert-success">
                    {{Session('status')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session('error')}}
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>

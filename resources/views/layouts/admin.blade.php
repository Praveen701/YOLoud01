<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

    <style>
        a:hover {
            text-decoration: none
        }

    </style>
</head>

<body class="bg-light">
    <div id="app">
        @if (Auth::user())
            <nav class="navbar-custom">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars" style="color: red;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav-custom scroll ulres">
                        <li class="li-items">
                            <div class="text-center" style="font-family: 'Aladin',cursive;"><a href="" id="items">
                                    <h1>YoLoud</h1>
                                </a></div>
                        </li>
                        <li class="li-items">
                            <a href="/home" id="items"><i class="fas fa-chart-pie" aria-hidden="true"></i> Dashboard</>
                                </a>
                        </li>
                        <li class="li-items">
                            <a href="#influencer" data-toggle="collapse" id="items" aria-expanded="false"
                                class="dropdown-toggle"><i class="fas fa-fw fa-boxes"></i> Influencer</a>
                            <ul class="collapse" style="list-style: none;margin-left:-10px" id="influencer">
                                <li><a href="/admin/influencer" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> List</a></li>
                                <li><a href="/admin/influencer/add" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> New Influencer</a></li>
                                            <li><a href="/admin/influencer/pendinglist" class="drpdwn"><i style="font-size:10px"
                                                class="far fa-circle" aria-hidden="true"></i>Pending Approval</a></li>

                            </ul>
                        </li>
                        <li class="li-items">
                            <a href="#brand" data-toggle="collapse" id="items" aria-expanded="false"
                                class="dropdown-toggle"><i class="fas fa-fw fa-boxes"></i> Brand</a>
                            <ul class="collapse" style="list-style: none;margin-left:-10px" id="brand">
                                <li><a href="/admin/brand" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> List</a></li>
                                <li><a href="/admin/brand/add" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> New Brand</a></li>
                               

                            </ul>
                        </li>
                        <li class="li-items">
                            <a href="#campaign" data-toggle="collapse" id="items" aria-expanded="false"
                                class="dropdown-toggle"><i class="fas fa-fw fa-boxes"></i> Campaign</a>
                            <ul class="collapse" style="list-style: none;margin-left:-15px" id="campaign">
                                <li><a href="/admin/campaign" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> List</a></li>
                                <li><a href="/admin/campaign/create" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> New Campaign</a></li>
                               <li><a href="/admin/otheropp" class="drpdwn"><i style="font-size:10px"
                                class="far fa-circle" aria-hidden="true"></i>Other Opportunities</a></li>
                               

                            </ul>
                        </li>


                        <li class="li-items">
                            <a href="#settings" data-toggle="collapse" id="items" aria-expanded="false"
                                class="dropdown-toggle"><i class="fas fa-fw fa-cogs"></i> Settings</a>
                            <ul class="collapse" style="list-style: none;margin-left:-10px" id="settings">
                                <li><a href="/admin/settings/interest" class="drpdwn"><i style="font-size:10px"
                                            class="far fa-circle" aria-hidden="true"></i> Interest</a></li>
                                            <li><a href="/admin/settings/language" class="drpdwn"><i style="font-size:10px"
                                                class="far fa-circle" aria-hidden="true"></i> Language</a></li>
                            </ul>
                        </li>
                        <li class="li-items ">
                            <a class="nav-links"  id="items" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt fa-fw" aria-hidden="true"></i>{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif


        <main class="py-2 s">
            @if (Session::has('status'))
                <div class="alert alert-success">
                    {{ Session('status') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session('error') }}
                </div>
            @endif
            @yield('content')
        </main>
    </div>
    <script>

    </script>


</body>

</html>

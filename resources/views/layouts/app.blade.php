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
<body style="background-color: #ede5d1">
    <div id="app">
        
        @auth



        <nav class="navbar navbar-expand-md fixed-top" style="background-color: #dda05d;position:fixed">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{asset('img/logo4.jpeg')}}" alt="" height="58px" width="61px" style="border-radius: 20px">
                </a>
                <button class="navbar-toggler log" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <ul class="navbar-nav ">
                    <li class="nav-item bot">
                        <a class="" style="color:black">+91-7631192046</a><br>
                        <a class="support" style="color:black">Support <i class="fas fa-headset"></i></a>
                    </li>
                </ul>
              
            
              

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
                        @else
                       
                            <li class="nav-item log">
                                <a class="" style="color:black">+91-7631192046</a><br>
                                <a class="support" style="color:black">Support <i class="fas fa-headset"></i></a>
                            </li>
                          
                    
                               
                            
                     
                            <li class="nav-item dropdown ml-4 mt-2 log">
                               
                                <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" style="color: black" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


<br>
<br>
<br>





        
        {{-- <nav class="navbar " style="background-color: #dda05d">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                  </div>
              
        
          
            
              <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
        
                   <li >
                       <a style="color:black" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
          </nav>
          --}}
          

        {{-- <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </nav> --}}

        
          
          
 
       

          <div class="collapse navbar-collapse bot menu" id="bottom" >
            <!-- Left Side Of Navbar -->
           
            <div class="card " style="margin: -25px 0 0 74px;display: -webkit-inline-box;border-radius:10px;box-shadow: 2px 1px 6px -0.5px #888;">
           
              <div class="card-body">
                <h4 class="card-title" style="text-align: center;"><b style="color: black">{{Auth::user()->name}}</b></h4>
                <p class="card-text" style="color: grey;text-align: center;" ><b>{{Auth::user()->email}}</b></p>
              </div>
            </div>
            <div class="float-left" style="margin: -69px -22px 0 0;display: -webkit-inline-box;">
                <ul class="navbar-nav">
                   
                  <li class="link-items">
                    <a type="button" data-toggle="collapse" data-target="#bottom" aria-controls="bottom" class="nav-links">
                        <i class="fas fa-arrow-left" style="font-size: 14px;color: black"></i>
                      <b style="color: black">Go Back</b> </a>

                </li>
                </ul>
            </div>
              
               
                
                
            
                <div class="col-4 mt-3">
                    <ul class="navbar-nav">
                        <li class="link-items @if(Request::is('settings')) actives @endif">
                            <a href="/settings" class="nav-links"> 
                                <i class="fas fa-user-circle" style="font-size: 20px"></i> <p style="margin: -24px 0 0 31px;">My Profile</p>  </a>
                       </li>
                    </ul>
                   
                </div>
                <hr>
                <div class="col-5 mt-2">
                    <ul class="navbar-nav ">
                        <li class="link-items @if(Request::is('payment')) actives @endif">
                            <a href="/payment" class="nav-links"> <i class="fas fa-wallet " style="font-size: 20px"></i> <p style="margin: -24px 0 0 31px;">Payment Preferences</p>   </a>
                       </li>
                    </ul>
                   
                </div>
                <hr>
              
                <div class="col-4">
                

                       <ul class="navbar-nav ">
                    
                        <li class="link-items">
                            <a class="nav-links" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt" style="font-size: 20px"></i>
                              <p style="margin: -24px 0 0 31px;"> Log Out</p>   </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        {{-- <li class="link-items ">
                            <a type="button" data-toggle="collapse" data-target="#bottom" aria-controls="bottom" class="nav-links">
                                <i class="fas fa-arrow-left" style="font-size: 25px"></i>
                               <p style="font-size: 11px" >Back</p> </a>

                        </li> --}}
                    </ul>
                </div>
                <hr>
           
           
             
             
          
      
    </div>




          <div class="bot">
            <nav class="navbar fixed-bottom navbar-light bg-light " style="height: 73px;flex-wrap: unset;left: -46px;">
                 
            
                <div class="row justify-content-center">
                    <div class="col-2">
                        <ul class="navbar-nav mt-3 ">
                            <li class="link-items  @if(Request::is('home')) actives @endif">
                                <a href="/home" class="nav-links"> <i class="fas fa-chart-pie ml-3" style="font-size: 20px"></i>
                                    <p style="font-size: 11px">Dashboard</p> </a>
                                 
                           </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav mt-3 ">
                            <li class="link-items @if(Request::is('campaign')) actives @endif">
                                <a href="/campaign" class="nav-links"> <i class="fas fa-bullhorn ml-3" style="font-size: 20px;"></i>
                                    <p style="font-size: 11px;">Campaigns</p>  </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav mt-3">
                            <li class="link-items @if(Request::is('otheroffers')) actives @endif">
                                <a href="/otheroffers" class="nav-links"> <i class="fas fa-tag ml-2" style="font-size: 20px;"></i>
                                    <p style="font-size: 11px;text-align:center;">Other Opportunities</p></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2 ">
                        <ul class="navbar-nav mt-3 ml-2">
                            <li class="link-items @if(Request::is('socialaccounts')) actives @endif">
                                <a href="/socialaccounts" class="nav-links"> <i class="fab fa-skype ml-2" style="font-size: 20px"></i>
                                    <p style="font-size: 10px;text-align:center;">Social Accounts</p></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav mt-4 ">
                            <li class="link-items">
                                <a type="button" data-toggle="collapse" data-target="#bottom" aria-controls="bottom" class="nav-links"> <i class="fas fa-bars ml-1" style="font-size: 20px"></i>
                                    <p style="font-size: 11px">Menu</p> </a>
        {{-- 
                                <button class="navbar-toggler nav-links" type="button"  data-toggle="collapse" data-target="#bottom" aria-controls="bottom" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                                </button> --}}
                                 
                           </li>
                        </ul>
                    </div>

                </div>

              
                
                {{-- <ul class="navbar-nav mt-3 ">
                    <li class="link-items  @if(Request::is('home')) actives @endif">
                        <a href="/home" class="nav-links"> <i class="fas fa-chart-pie ml-3" style="font-size: 20px"></i>
                            <p style="font-size: 11px">Dashboard</p> </a>
                         
                   </li>
                </ul> --}}
                {{-- <ul class="navbar-nav mt-3 ">
                    <li class="link-items @if(Request::is('campaign')) actives @endif">
                        <a href="/campaign" class="nav-links"> <i class="fas fa-bullhorn ml-3" style="font-size: 20px;"></i>
                            <p style="font-size: 11px;">Campaigns</p>  </a>
                    </li>
                </ul> --}}
                {{-- <ul class="navbar-nav mt-3">
                    <li class="link-items @if(Request::is('otheroffers')) actives @endif">
                        <a href="/otheroffers" class="nav-links"> <i class="fas fa-tag ml-3" style="font-size: 20px;"></i>
                            <p style="font-size: 11px;">Other<br> Opportunities</p></a>
                    </li>
                </ul> --}}
                {{-- <ul class="navbar-nav mt-3 ">
                    <li class="link-items @if(Request::is('socialaccounts')) actives @endif">
                        <a href="/socialaccounts" class="nav-links"> <i class="fab fa-skype ml-4" style="font-size: 20px"></i>
                            <p style="font-size: 10px">Social Accounts</p></a>
                    </li>
                </ul> --}}
                {{-- <ul class="navbar-nav">
                    <li class="link-items @if(Request::is('settings')) actives @endif">
                        <a href="/settings" class="nav-links"> <i class="fas fa-cog" style="font-size: 25px"></i>
                            <p style="font-size: 11px">Settings</p> </a>
                    </li>
                </ul> --}}

                {{-- <ul class="navbar-nav mt-4 ml-3">
                    <li class="link-items">
                        <a type="button" data-toggle="collapse" data-target="#bottom" aria-controls="bottom" class="nav-links"> <i class="fas fa-bars ml-1" style="font-size: 20px"></i>
                            <p style="font-size: 11px">Menu</p> </a>

                        <button class="navbar-toggler nav-links" type="button"  data-toggle="collapse" data-target="#bottom" aria-controls="bottom" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                         
                   </li>
                </ul> --}}
                
      
              

                
               
                   
                  
              </nav>
        </div>
        
        <nav class="navbar-cus navbar-expand-md Rectangle-3" style="margin-top: 5rem">
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="btn btn-light"><i class="fas fa-bars"></i></span>
            </button> --}}
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav-cus ">
                    {{-- <profile :profile="{{ Auth::user() }}"></profile> --}}

                    <li class="li-items mx-auto mt-4 d-flex align-items-center justify-content-center" style="flex-direction:column">

                    </li>
                  
                    <li class="link-items @if(Request::is('home')) actives @endif">
                         <a href="/home" class="nav-links"> <i class="fas fa-chart-pie" style="font-size: 22px"></i>  Dashboard</a>
                    </li>
                    <li class="link-items @if(Request::is('campaign')) actives @endif">
                        <a href="/campaign" class="nav-links"> <i class="fas fa-bullhorn" style="font-size: 22px"></i>  Campaigns</a>
                    </li>
                    <li class="link-items @if(Request::is('otheroffers')) actives @endif">
                        <a href="/otheroffers" class="nav-links"> <i class="fas fa-tag" style="font-size: 22px"></i> Other Opportunities</a>
                    </li>
                    <li class="link-items @if(Request::is('socialaccounts')) actives @endif">
                        <a href="/socialaccounts" class="nav-links"> <i class="fab fa-skype" style="font-size: 22px"></i> Social Accounts</a>
                    </li>
                    
                    <li class="link-items @if(Request::is('settings')) actives @endif">
                        <a href="/settings" class="nav-links"> <i class="fas fa-user-circle" style="font-size: 22px"></i> My Profile</a>
                    </li>

                    <li class="link-items @if(Request::is('payment')) actives @endif">
                        <a href="/payment" class="nav-links"> <i class="fas fa-wallet" style="font-size: 22px"></i> Payment
                            Preferences</a>
                    </li>

                    {{-- <li class="link-items">
                       <a class="nav-links" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>   {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li> --}}


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

<style>
/* .Rectangle-3 {
  width: 298px;
  height: 395px;
  /* margin: 6px 49px 53px 0; */
  margin-left: 2rem;
  padding: 0px 0 37px 11px;
  border-radius: 44px;
  -webkit-backdrop-filter: blur(4px);
  backdrop-filter: blur(4px);
  background-color: #fff;
} */

</style>

@extends('layouts.admin')

@section('content')
<div class="container">
    <h4>Settings - <span style="font-size:20px">{{ $title }}</span>
    </h4>
   
    <div class="col-md-10 col-sm-12 p-3 mt-3 bg-white">
        @yield('settingscontent')
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
     
        {{-- <campaign :campaign="{{ json_encode($campaign) }}" :user="{{ Auth::user() }}"></campaign>
         --}}
         <cstatus :data="{{ json_encode($data) }}" :user="{{ Auth::user() }}" :campaign="{{ json_encode($campaign) }}" :brand="{{ json_encode($brand) }}"  :napp="{{ json_encode($napp) }}"></cstatus>
      

          
</div>
@endsection
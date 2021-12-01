@extends('layouts.admin')
@section('content')

<div class="container">
  

  <cone :data="{{ json_encode($data) }}" :brand="{{ json_encode($brand) }}"  :intrest="{{ json_encode($intrest) }}"></cone>


   </div>


@endsection
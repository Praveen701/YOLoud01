@extends('layouts.admin')
@section('content')

<div class="container">

  <createcamp :data="{{ json_encode($data) }}" :intrest="{{ json_encode($intrest) }}"></createcamp>


   </div>


@endsection
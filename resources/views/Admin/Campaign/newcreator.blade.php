@extends('layouts.admin')
@section('content')
<div class="container">
<newcreator :data="{{ json_encode($data) }}" :fin="{{ json_encode($fin) }}"></newcreator>
</div>
@endsection
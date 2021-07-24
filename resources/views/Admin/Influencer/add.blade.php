
@extends('layouts.admin')
@section('content')
<div class="container">
    <newinfluencer :yftsocial="{{ json_encode($yftsocial) }}" :intrest="{{ json_encode($intrest) }}" :instagram="{{ json_encode($insta) }}" :language="{{ json_encode($language) }}"></newinfluencer>
</div>
@endsection

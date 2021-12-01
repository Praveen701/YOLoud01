@extends('layouts.admin')
@section('content')
<div class="container">
<editcamp :data="{{ json_encode($data) }}" :brand="{{ json_encode($brand) }}" :intrest="{{ json_encode($intrest) }}"></editcamp>
</div>
@endsection
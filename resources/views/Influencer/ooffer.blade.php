@extends('layouts.app')

@section('content')
<div class="container">
     <ooffer :offers="{{ json_encode($act) }}"></ooffer>
</div>
@endsection
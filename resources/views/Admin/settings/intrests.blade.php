@extends('layouts.settings')

@section('settingscontent')
<div class="container">
    <ul class="nav text-left">
        <li class="nav-item">
            <a class="nav-link @if($title=='Intrests') actives @endif btn" href="/admin/settings/interest"><h4>Intrests</h4></a>
        </li>
    </ul>
    <intrest :data="{{ json_encode($data) }}"></intrest>
</div>
@endsection

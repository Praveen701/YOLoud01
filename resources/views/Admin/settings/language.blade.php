@extends('layouts.settings')

@section('settingscontent')
<div class="container">
    <ul class="nav text-left">
        <li class="nav-item">
            <a class="nav-link @if($title=='Languages') actives @endif btn" href="/admin/settings/interest"><h4>Languages</h4></a>
        </li>
    </ul>
    <language :data="{{ json_encode($data) }}"></language>
</div>
@endsection

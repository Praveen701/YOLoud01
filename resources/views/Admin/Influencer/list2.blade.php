@extends('layouts.admin')

@section('content')

    <influencerlist :user="{{ json_encode($user) }}"  ></influencerlist>
    
@endsection

@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="card bg-white text-right p-2">
        <div class="card-body">
            <div class="float-right">
                <a href="{{ url()->previous() }}" class="btn btn-primary"
                  ><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a
                >
              </div>
    <influenceredit :profile="{{ json_encode($data) }}" :intrest="{{ json_encode($intrest) }}" 
    :languages="{{ json_encode($language) }}" :influencers="{{ json_encode($influencer) }}"
     :instagram="{{ json_encode($insta) }}"  :yftsocial="{{ json_encode($yftsocial) }}" 
     :inflog="{{ json_encode($inflog) }}" :sociallog="{{ json_encode($sociallog) }}" :camppar="{{ json_encode($camppar) }}"  ></influenceredit>
   

        </div>
    </div>
    </div>

@endsection
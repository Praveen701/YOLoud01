@extends('layouts.app')

@section('content')
<div class="container">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
     <saccount :instagram="{{ json_encode($insta) }}" :pics="{{ json_encode($pic) }}"  :influencers="{{ json_encode($influencer) }}" :yft="{{ json_encode($yftsocial) }}" > </saccount>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
        @csrf
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

             <payment :profile="{{ Auth::user() }}" :intrest="{{ json_encode($intrest) }}" :languages="{{ json_encode($language) }}" :instagram="{{ json_encode($insta) }}" :yftsocial="{{ json_encode($yftsocial) }}" :influencers="{{ json_encode($influencer) }}"></payment>
            </form>
</div>
@endsection
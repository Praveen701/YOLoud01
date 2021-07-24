@extends('layouts.app')

@section('content')
<div class="container">
        @csrf
        <settings :profile="{{ Auth::user() }}" :intrest="{{ json_encode($intrest) }}" :languages="{{ json_encode($language) }}" :instagram="{{ json_encode($insta) }}" :yftsocial="{{ json_encode($yftsocial) }}" :influencers="{{ json_encode($influencer) }}"></settings>
    </form>
</div>
@endsection

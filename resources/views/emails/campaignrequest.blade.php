@component('mail::message')
# Invitation for Campaign !

Hey {{$data->user->name}},<br>
Greetings from YOLoud!<br>

 New Campaign ({{$campaign->campaigntitle}}) has been matching with your profile ! <br>
The Main Objective about this campaign is to create {{$campaign->campaignobj}} .
The Final Date to apply for the campaign is  {{$campaign->startdate}}.



{{-- 
@component('mail::button', ['url' => $url])
Accept !
@endcomponent --}}

Thanks,<br>
YOLoud
@endcomponent

@component('mail::message')

Hi Team,

The campaign opportunity for {{$campaign->brand->companyname}} was marked as Not Suitable by {{Auth::user()->name}}.

@endcomponent

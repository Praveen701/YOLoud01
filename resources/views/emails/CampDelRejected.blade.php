@component('mail::message')

Hi Team, <br>

The campaign deliverables for {{$campaign->brand->companyname}} was rejected by {{Auth::user()->name}}. 

@endcomponent

@component('mail::message')

Hi Team, <br>

The campaign deliverables for {{$campaign->brand->companyname}} was accepted by {{Auth::user()->name}}. 

@endcomponent

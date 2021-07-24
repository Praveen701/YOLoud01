@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->suser->name}}, <br>

Wohhoo! your profile was shortlisted by the brand for {{$campaign->campaigntitle}} campaign. 

Click here {{$url}} to view the deliverables and Accept the opportunity before the slots get over.

Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.


Regards,<br>
Team {{ config('app.name') }}
@endcomponent

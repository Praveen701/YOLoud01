@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->suser->name}}, <br>

You have received a new offer for {{$campaign->campaigntitle}} campaign.

Click here {{$url}} to view the revised deliverables 
and Accept the opportunity before the slots get over.<br>

Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.


Regards,<br>
Team {{ config('app.name') }}
@endcomponent


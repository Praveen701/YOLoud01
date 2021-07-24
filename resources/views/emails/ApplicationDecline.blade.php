@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->suser->name}}, <br>


Your profile was rejected by the brand for 
{{$campaign->campaigntitle}} campaign. You will be notified 
over email when you receive a next opportunity.<br>


Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.<br>

Regards,<br>
Team {{ config('app.name') }}
@endcomponent
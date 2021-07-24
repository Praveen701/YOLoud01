@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->suser->name}}, <br>

Commercials for {{$campaign->campaigntitle}} campaign has been disbursed. Please check your bank account to verify. 
Also, you will be notified over Email when you receive a next opportunity.<br>

Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.


Regards,<br>
Team {{ config('app.name') }}
@endcomponent
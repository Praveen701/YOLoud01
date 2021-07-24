@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->suser->name}}, <br>


Wohhoo! your profile is selected by the brand for the applied opportunity. 

Click here {{$url}} to view more details about the campaign.

Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.


Regards,<br>
Team {{ config('app.name') }}
@endcomponent

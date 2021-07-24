@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->name}}, <br>

We are excited to share with you that your profile has
 matched with the upcoming campaign with {{$campaign->brand->companyname}}.

Click here {{$url}} to apply for the campaign before it expires.<br>

Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.<br>



Regards,<br>
Team {{ config('app.name') }}
@endcomponent

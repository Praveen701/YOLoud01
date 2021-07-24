@component('mail::message')
# Greetings from YOLoud 

Hi {{$data->name}}, <br>

We are excited to share with you that your profile has
 matched with the upcoming campaign with {{$campaign->brand->companyname}}.<br>


Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.<br>


@component('mail::button', ['url' => $url])
Apply here
@endcomponent

Regards,<br>
Team {{ config('app.name') }}
@endcomponent

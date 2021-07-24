@component('mail::message')
# Greetings from YOLoud 

Hi {{$user->name}}, <br>

Your account has been created successfully. Remember to always keep your profile updated to receive best campaign opportunities matching with your profile.<br>

Please reach out to us on partnerinfluencer@yoloud.com incase of any queries.


Regards,<br>
Team {{ config('app.name') }}
@endcomponent

@component('mail::message')
# Welcome to YOLoud

Dear {{$user->name}}, <br>

You have successfully registered with YOLoud.<br>

Your Login Credentials :<br>
<b>Email : </b> {{$user->email}} <br>
<b>Password :</b> YOLOUD001 <br>

<b>Note :</b> We request you to not share your login credentials with others.

 
@component('mail::button', ['url' => $url])
Login
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent

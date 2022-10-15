@component('mail::message', ['data' => $data])

<h2>Dear {{ $data['email'] }} Thank you for your registration.</h2> 
<p>Please click on the link below to verify your Email address.</p>

<?php $url = route('verify.email', ['token' => $data['token']]); ?>
<h1>{{ $url }}</h1>

<p>If you did not perform this action with your email, please ignore.</p>
<p>Regards {{ ucwords(config('app.name')) }}</p>
@endcomponent

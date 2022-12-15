@component('mail::message', ['data' => $data])

<img src="{{ env('APP_URL') }}/images/logos/small.png" style="width: 100%" alt="{{ ucwords(config('app.name')) }}">
<p>{{ $data['message'] }}</p>
<img src="{{ env('APP_URL') }}/images/logos/small.png" style="width: 100%" alt="{{ ucwords(config('app.name')) }}">

<p>&copy All Rights Reserved. {{ ucwords(config('app.name')) }}</p>
@endcomponent

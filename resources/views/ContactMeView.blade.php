@component('mail::message')
#{{ $topic }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/about'])
click me
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
#{{$request['name']}} has sent a message
@component('mail::panel')
    " {{ $request['message'] }} "
@endcomponent
You can reach them at <a href="mailto:{{ $request['email'] }}">{{ $request['email'] }}</a>
@endcomponent
@component('mail::message')
# Introduction
- one
- two 
- three
- four 
- five

The body of your message.

@component('mail::button', ['url' => 'https://web.facebook.com/permalink.php?story_fbid=1851547368429232&id=100007219605230&ref=notif&notif_t=like&notif_id=1489688424968153&_rdc=1&_rdr'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Panel Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

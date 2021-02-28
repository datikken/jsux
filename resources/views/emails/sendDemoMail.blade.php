@component('mail::message')

    {{ $maildata['title'] }}
    {{ $maildata['message'] }}

    @component('mail::button', ['url' => $maildata['url']])
        Verify
    @endcomponent

@endcomponent

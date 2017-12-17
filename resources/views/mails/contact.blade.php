@component('mail::message')
    @if($subject)
        # Krysis Guard Contact
    @endif
    - From {{ $email }}
    @if($name)
        - Name: {{ $name }}
    @endif

    @component('mail::panel')
        {{ $message }}
    @endcomponent
@endcomponent
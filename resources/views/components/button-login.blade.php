@php
    $dark = isset($dark) && $dark == true;
    $large = isset($large) && $large == true;
    if($large){
        $src = $dark ? 'https://images.contentful.com/idjq7aai9ylm/4fSjj56uD6CYwYyus4KmES/4f6385c91e6de56274d99496e6adebab/EVE_SSO_Login_Buttons_Large_Black.png?w=270&h=45'
        : 'https://images.contentful.com/idjq7aai9ylm/4PTzeiAshqiM8osU2giO0Y/5cc4cb60bac52422da2e45db87b6819c/EVE_SSO_Login_Buttons_Large_White.png?w=270&h=45';

    } else {
        $src = $dark ? 'https://images.contentful.com/idjq7aai9ylm/12vrPsIMBQi28QwCGOAqGk/33234da7672c6b0cdca394fc8e0b1c2b/EVE_SSO_Login_Buttons_Small_Black.png?w=195&h=30'
        : 'https://images.contentful.com/idjq7aai9ylm/18BxKSXCymyqY4QKo8KwKe/c2bdded6118472dd587c8107f24104d7/EVE_SSO_Login_Buttons_Small_White.png?w=195&h=30';
    }
@endphp
@auth
    @isset($message)
            {{ $message }}
        @else
        <span class="ion-person"></span>
        Welcome, <span class="text-main-1">{{ $user = auth()->user()->name }}</span>
    @endisset
    @else
<a href="{{ route('eve.auth.login') }}" title="Connect with EVE" {{ isset($attributes) ? $attributes : '' }}>
    <img alt="EVE SSO Login Buttons Small Black"
         src="{{ $src }}">
</a>
@endauth
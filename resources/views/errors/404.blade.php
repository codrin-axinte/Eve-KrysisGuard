@extends('layouts.master')

@section('title', '404 - Page Not Found')

@section('content')
    <div class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <div style="background-image: url({{ asset('images/404-bg.jpg') }})" class="op-8"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">
                    <div class="nk-header-text">
                        <div class="nk-gap-4"></div>
                        <div class="container">
                            <div class="text-center">
                                <h2 class="nk-title display-4">
                                    @lang('Page Not Found')
                                </h2>
                                <div class="nk-gap-2"></div>
                                <div class="row">
                                    <div class="col-md-8 offset-md-2"><p class="lead">@lang('Oh, wreck! You are lost in the deep space. Luckily for you, we can take you back home.')</p>
                                        <div class="nk-gap-2"></div>
                                        <a href="{{ url('/') }}" class="nk-btn nk-btn-lg link-effect-4">@lang('Go Home, You\'re lost!')</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
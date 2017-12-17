@extends('layouts.master')

@section('title', 'Contact')

@section('content')
{{--START: Header Title --><!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
        .nk-header-title-boxed
--}}
    <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <div style="background-image: url({{ asset('images/header1.jpg') }})"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container"><h1 class="nk-title">Contact Us</h1></div>
            </div>
        </div>
    </div>
    {{--END: Header Title--}}
    {{--START: Contact Form--}}
    <div class="nk-gap-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="nk-box-3 bg-dark-1"><h2 class="nk-title h3 text-center">@lang('Drop Us a Line')</h2>
                    <div class="nk-gap-2"></div>
                    <form action="{{ route('contact.store') }}"
                          method="post"
                          class="nk-form nk-form-ajax nk-form-style-1" @submit.prevent="">
                        {{ csrf_field() }}
                        <input type="email" class="form-control required" name="email" placeholder="Email *" disabled>
                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="name" placeholder="Name *" disabled>
                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="5"
                                  placeholder="Message *" disabled></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <p><em>* Form is disabled for now.</em></p>
                        <button class="nk-btn nk-btn-lg link-effect-4" disabled>Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-4"></div>
    {{--END: Contact Form--}}
@endsection



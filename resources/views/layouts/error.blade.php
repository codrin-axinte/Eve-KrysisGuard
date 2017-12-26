@extends('layouts.master')

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
                                @yield('page-content')
                            </div>
                        </div>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
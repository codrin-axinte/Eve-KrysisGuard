@extends('layouts.master')

@section('content')
    <div class="nk-header-title nk-header-title-sm nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <div style="background-image: url({{ asset('assets/images/image-5.jpg') }})" class="op-5"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container"></div>
            </div>
        </div>
    </div><!-- END: Header Title -->
    <div class="container">
        <div class="nk-social-profile nk-social-profile-container-offset">
            <div class="row">
                <div class="col-md-5 col-lg-3">
                    <div class="nk-social-profile-avatar">
                        <a href="#">
                            <img src="{{ $user->avatar }}" alt="{{ $user->username }}"></a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9">
                    <div class="nk-social-profile-info">
                        <div class="nk-gap-2"></div>
                        <div class="nk-social-profile-info-last-seen">last seen 2 hours ago</div>
                        <h1 class="nk-social-profile-info-name">{{ $user->name }}</h1>
                        <div class="nk-social-profile-info-username">@ {{ $user->username }}</div>
                        <div class="nk-social-profile-info-actions">
                            <a href="#" class="nk-btn link-effect-4">
                                Add Friend
                            </a>
                            <a href="#" class="nk-btn link-effect-4">Leave Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row vertical-gap">
            <div class="col-lg-3">
                <app-sidebar sticky>
                    @include('account.sidebar')
                </app-sidebar>
            </div>
            <div class="col-lg-9">
                <div class="nk-gap-2 hidden-md-down"></div>
                <div class="nk-social-menu-inline">
                    @yield('social-tabs')
                </div>
                <div class="nk-social-container">
                    @yield('social-content')
                </div>
                <div class="nk-gap-4"></div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>
@endsection
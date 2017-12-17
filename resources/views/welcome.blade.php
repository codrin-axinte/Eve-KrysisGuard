@extends('layouts.master')

@section('title', 'Welcome to KrysisGuard')

@section('content')
    <!-- START: Header Title -->
    <!--
        Additional Classes:
            .nk-header-title-sm
            .nk-header-title-md
            .nk-header-title-lg
            .nk-header-title-xl
            .nk-header-title-full
            .nk-header-title-parallax
            .nk-header-title-parallax-opacity
            .nk-header-title-boxed
    -->

    <div class="nk-header-title nk-header-title-lg nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <div style="background-image: url({{ asset('images/bg3.jpg') }})"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">
                    <div class="nk-header-text"><h1 class="nk-title display-3">Welcome to {{ $site_title }}</h1>
                        <div class="nk-gap-2"></div>
                        <a href="{{ route('ores.index') }}"
                           class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                            <span>@lang('Ore Calculator')</span>
                        </a>
                        <a href="{{ url('/Krysis-Guard-win32-x64.zip')  }}" rel="noopener noreferrer"  target="_blank"  title="Download Desktop Application" class="nk-btn nk-btn-lg link-effect-4">
                            <span>@lang('Download Application')</span>
                        </a>
                        <div class="nk-gap-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Header Title -->
    <!-- START: Rev Slider -->
    <div class="mnt-80">
        <div id="rev_slider_50_1_wrapper" class="rev_slider_wrapper fullscreen-container"
             data-alias="photography-carousel48" style="padding:0px">
            <div id="rev_slider_50_1" class="rev_slider fullscreenbanner" style="display:none" data-version="5.0.7">
                <ul><!-- SLIDE  -->

                    <li data-index="rs-185" data-transition="slideoverhorizontal" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-3-thumb.jpg" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE --><img src="{{ asset('images/ship4.jpg') }}" alt="" data-bgposition="center center"
                                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                data-no-retina></li><!-- SLIDE  -->

                    <li data-index="rs-192" data-transition="slideoververtical" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-5-thumb.jpg" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE --><img src="{{ asset('images/ship3.jpg') }}" alt="" data-bgposition="center center"
                                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                data-no-retina></li><!-- SLIDE  -->

                    <li data-index="rs-186" data-transition="slideoverhorizontal" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-4-thumb.jpg" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE --><img src="{{ asset('images/ship2.jpg') }}" alt="" data-bgposition="center center"
                                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                data-no-retina></li><!-- SLIDE  -->

                    <li data-index="rs-183" data-transition="slideoververtical" data-slotamount="7"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="assets/images/gallery-1-thumb.jpg" data-rotate="0" data-fstransition="fade"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                        <!-- MAIN IMAGE --><img src="{{ asset('images/ship1.jpg') }}" alt="" data-bgposition="center center"
                                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                data-no-retina></li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important"></div>
            </div>
        </div>
    </div>
    <!-- END: Rev Slider -->

    <!-- START: Features -->
    <div class="container">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap lg-gap">
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle"><span class="ion-ios-calculator"></span></div>
                    <div class="nk-ibox-cont"><h2 class="nk-ibox-title">Ore Calculator</h2>
                        You can use the <a title="Ore Calculator" href="{{ route('ores.index') }}">Ore Calculator</a> to ease your job when creating a contract. The <strong>unit prices are set</strong> and <strong>updated</strong> by the mighty <strong>Seravok</strong> himself, so you don't need the worry 'bout that. First, the prices, are updated here and after anywhere else.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle"><span class="ion-fireball"></span></div>
                    <div class="nk-ibox-cont"><h2 class="nk-ibox-title">Resources War</h2>
                        Join the resource war and earn millions of ISK. Mine alongside our fleet and sell your stack according to the unit price of the ore, make sure you check the prices every day.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-ibox">
                    <div class="nk-ibox-icon nk-ibox-icon-circle"><span class="ion-ribbon-a"></span></div>
                    <div class="nk-ibox-cont"><h2 class="nk-ibox-title">Make it Better</h2>
                        For those who are willing to help this project and see future updates check the <a title="Donate" href="http://krysisgaurd.com/donate">donate page</a>. Also, you can propose features and ideas to us at
                        <a href="#">proposals</a> page.
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Features -->

    <!-- START: About -->
    <div class="nk-box bg-dark-1">
        <div class="container">
            <div class="nk-gap-6"></div>
            <div class="nk-gap-2"></div>
            <h2 class="nk-title h1 text-center">About The Corp</h2>
            <div class="nk-gap-3"></div>
            <p class="lead text-justify">
                Welcome to the Guard Capsuleer,
            <br>
            <br>
                <span class="nk-dropcap text-main-1">K</span>rysis Guard was commissioned during the turmoil of the Amarr Empire's downfall to the Minmatar Republic forces over the past year.
                <br>
             With our systems destroyed, the High Council of the Royal Families commissioned an independent body of Paladins to reclaim lost systems and worlds put to flame from the Republic's Navies and Militias.
            With that - We hold carry our Shields and Swords and trust in the wings of the Angels to carry us forward.
              <br>
              <br>
            Krysis Guard is a PvE-vP based corporation operating in Amarr Faction Warfare Low-sec systems.

                 Faction Warfare allows us to have in a friendly casual environment 24.7 PvP activities while maintaining a strong industrial backbone and economy.
                <br>
                <br>
                We provide a seeded market in our primary system as well as daily PvP fleets and Mining fleets.
                    From our mining fleets - Krysis Guard authorizes purchases from its members via contracts for all ore mined at set prices giving our industrial members the ability to generate incomes.
                <br>
                <br>
                We hope you will enjoy your time while flying with and fighting for the Guard.
            </p>
            <div class="nk-gap-2"></div>
            <div class="nk-gap-6"></div>
        </div>
    </div>
    <!-- END: About -->
    <!-- START: Video -->
    <div class="container">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=ZdoQzmzg2XY"
                     data-video-thumb="{{ asset('images/bg2.jpg') }}"></div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Video -->
    <!-- START: Coming Soon -->
    <div class="nk-box bg-dark-1 text-center">
        <div class="nk-gap-6"></div>
        <div class="nk-gap-2"></div>
        <div class="bg-image op-3" style="background-image: url({{ asset('images/bg1.jpg') }})"></div>
        <div class="container"><h2 class="display-4">Join Us Now</h2>
            <div class="nk-gap"></div>
            <div>You don't get to be great without a proper fleet...</div>
            <div class="nk-gap-4"></div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="nk-gap-6"></div>
    </div>
    <!-- END: Coming Soon -->


@endsection
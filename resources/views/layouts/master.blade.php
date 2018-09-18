<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Welcome') | {{ $site_title = setting('site.title', config('app.name')) }}</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    {{-- START: Styles --}}
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,700%7cMarcellus+SC" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">{{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">{{-- IonIcons --}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/ionicons/css/ionicons.min.css') }}">{{-- Revolution Slider --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/navigation.css') }}">{{-- Flickity --}}
    <link rel="stylesheet" href="{{ asset('assets/bower_components/flickity/dist/flickity.min.css') }}">{{-- Photoswipe --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/photoswipe/dist/default-skin/default-skin.css') }}">
    {{-- DateTimePicker --}}
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/bower_components/datetimepicker/build/jquery.datetimepicker.min.css') }}">{{-- Revolution Slider --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/navigation.css') }}">{{-- Prism --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/prism/themes/prism-tomorrow.css') }}">
    {{-- Summernote --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/summernote/dist/summernote.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/godlike.min.css') }}">{{-- Custom Styles --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">{{-- END: Styles --}}

</head>{{--
    Additional Classes:
        .nk-page-boxed
--}}
<body>
@include('common.preloader')
{{-- START: Page Background --}}
<div class="nk-page-background op-5" data-bg-mp4="{{ asset('/assets/video/bg-2.mp4') }}" data-bg-webm="{{ asset('/assets/video/bg-2.webm') }}"
     data-bg-ogv="{{ asset('/assets/video/bg-2.ogv') }}" data-bg-poster="{{ asset('/assets/video/bg-2.jpg') }}"></div>{{-- END: Page Background --}}

<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>{{--
    Additional Classes:
        .nk-header-opaque
--}}
<header class="nk-header nk-header-opaque">{{--
    START: Top Contacts

    Additional Classes:
        .nk-contacts-top-light
--}}
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <div class="nk-navbar">
                    {{ menu('top-menu', 'menu.default') }}
                </div>
            </div>
            <div class="nk-contacts-right">
                <div class="nk-navbar">
                    <ul class="nk-nav">
                        <li>
                            @component('components.button-login')
                            @endcomponent
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>{{-- END: Top Contacts --}}
    @include('common.navbar')
</header>
@include('common.navbar-mobile')
{{--@if(Voyager::can('browse_admin'))
    @include('common.sidebar')
@endif--}}
<div class="nk-main">
    <div id="app">
        @yield('content')
    </div>
    @include('common.footer')
</div>
@include('modals.side-buttons')
@include('modals.search')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/bower_components/gsap/src/minified/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>{{-- Bootstrap --}}
<script src="{{ asset('assets/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>{{-- Sticky Kit --}}
<script src="{{ asset('assets/bower_components/sticky-kit/dist/sticky-kit.min.js') }}"></script>{{-- Jarallax --}}
<script src="{{ asset('assets/bower_components/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/jarallax/dist/jarallax-video.min.js') }}"></script>{{-- imagesLoaded --}}
<script src="{{ asset('assets/bower_components/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>{{-- Flickity --}}
<script src="{{ asset('assets/bower_components/flickity/dist/flickity.pkgd.min.js') }}"></script>{{-- Isotope --}}
<script src="{{ asset('assets/bower_components/isotope/dist/isotope.pkgd.min.js') }}"></script>{{-- Photoswipe --}}
<script src="{{ asset('assets/bower_components/photoswipe/dist/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>{{-- Typed.js --}}
<script src="{{ asset('assets/bower_components/typed.js/dist/typed.min.js') }}"></script>{{-- Jquery Form --}}
<script src="{{ asset('assets/bower_components/jquery-form/dist/jquery.form.min.js') }}"></script>{{-- Jquery Validation --}}
<script src="{{ asset('assets/bower_components/jquery-validation/dist/jquery.validate.min.js') }}"></script>
{{-- Jquery Countdown + Moment --}}
<script src="{{ asset('assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js') }}"></script>{{-- Hammer.js --}}
<script src="{{ asset('assets/bower_components/hammer.js/hammer.min.js') }}"></script>{{-- NanoSroller --}}
<script src="{{ asset('assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js') }}"></script>
{{-- SoundManager2 --}}
<script src="{{ asset('assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>
{{-- DateTimePicker --}}
<script src="{{ asset('assets/bower_components/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
{{-- Revolution Slider --}}
<script type="text/javascript" src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>{{-- Keymaster --}}
<script src="{{ asset('assets/bower_components/keymaster/keymaster.js') }}"></script>{{-- Summernote --}}
<script src="{{ asset('assets/bower_components/summernote/dist/summernote.min.js') }}"></script>{{-- Prism --}}
<script src="{{ asset('assets/bower_components/prism/prism.js') }}"></script>
<script src="{{ asset('assets/js/godlike.min.js') }}"></script>
<script src="{{ asset('assets/js/godlike-init.js') }}"></script>

<script type="text/javascript">var tpj = jQuery;
    var revapi50;
    tpj(document).ready(function () {
        if (tpj("#rev_slider_50_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_50_1");
        } else {
            revapi50 = tpj("#rev_slider_50_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "assets/plugins/revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    onHoverStop: "off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -90,
                    stretch: "off"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [800, 600, 400, 320],
                gridheight: [600, 400, 320, 280],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 0,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });</script>
</body>
</html>
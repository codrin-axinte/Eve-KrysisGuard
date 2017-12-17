{{--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
--}}
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content hidden-lg-up">
    <div class="nano">
        <div class="nano-content"><a href="{{ url('/') }}" class="nk-nav-logo">
                {{--<img src="assets/images/logo.svg" alt="" width="90">--}}
                {{ $site_title }}
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav"><!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] --></ul>
            </div>
        </div>
    </div>
</div>{{--END: Navbar Mobile--}}
{{--
START: Navbar
Additional Classes:
    .nk-navbar-sticky
    .nk-navbar-transparent
    .nk-navbar-autohide
    .nk-navbar-light
    .nk-navbar-no-link-effect
--}}
<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
    <div class="container">
        <div class="nk-nav-table">
            <a href="{{ url('/') }}" class="nk-nav-logo">
                {{-- <img src="assets/images/logo.svg"  alt="" width="90">--}}
                {{ str_replace_first(' ', '',$site_title) }}
            </a>
            {{ menu('main', 'menu.main') }}
            <ul class="nk-nav nk-nav-right nk-nav-icons">
                <li class="single-icon hidden-lg-up"><a href="#" class="no-link-effect"
                                                        data-nav-toggle="#nk-nav-mobile"><span
                                class="nk-icon-burger"><span class="nk-t-1"></span> <span
                                    class="nk-t-2"></span> <span class="nk-t-3"></span></span></a>
                </li>

                <li class="single-icon"><a href="#" class="nk-search-toggle no-link-effect"><span
                                class="nk-icon-search"></span></a>
                </li>
                @if(Voyager::can('browse_admin'))
                    <li class="single-icon">
                        <a href="{{ route('voyager.dashboard') }}" class="no-link-effect" {{--data-nav-toggle="#nk-side"--}} title="Admin Area">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
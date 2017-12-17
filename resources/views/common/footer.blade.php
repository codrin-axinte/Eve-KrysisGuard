<!-- START: Footer --><!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
-->
<footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
    <img class="nk-footer-top-corner" src="{{ asset('assets/images/footer-corner.png') }}" alt="">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="nk-footer-logos">
            <a href="https://zkillboard.com/corporation/98535920/"
               target="_blank">
                <img class="nk-img"
                     src="{{ asset('images/logo.png') }}" alt="{{ $site_title }}" title="{{ $site_title }}"
                     width="120"></a>
            <a href="https://www.eveonline.com/" target="_blank">
                <img class="nk-img"
                     src="https://web.ccpgamescdn.com/aws/eveonline/images/logo.png"
                     alt="EVE ONLINE Logo"
                     title="EVE ONLINE"
                     width="150"></a>
            <a href="http://loopbytes.com/" target="_blank">
                <img class="nk-img"
                     src="http://loopbytes.com/images/loopBytesSmall220x64.png"
                     alt="loopBytes Logo"
                     title="loopBytes"
                     width="200"></a>
        </div>
        <div class="nk-gap"></div>
        <p>&copy; 2017 Developed in association with LoopBytes and
            related logos are registered trademarks. KrysisGuard and related logos are registered trademarks or
            trademarks of id Software LLC in the U.S. and/or other countries. All other trademarks or trade names
            are the property of their respective owners. All Rights Reserved.</p>
        <div class="nk-footer-links">
            <a href="{{ url('/terms') }}" class="link-effect">Terms of Service</a>
            <span>|</span>
            <a href="{{ url('/privacy') }}" class="link-effect">Privacy Policy</a>
        </div>
        <div class="nk-gap-4"></div>
    </div>
</footer><!-- END: Footer -->
{{-- Preloader animation
 data-close-... data used for closing preloader
 data-open-...  data used for opening preloader
 --}}
<div class="nk-preloader">
    <div class="nk-preloader-bg" style="background-color: #000" data-close-frames="23" data-close-speed="1.2"
         data-close-sprites="/assets/images/preloader-bg.png" data-open-frames="23" data-open-speed="1.2"
         data-open-sprites="/assets/images/preloader-bg-bw.png"></div>
    <div class="nk-preloader-content">
        <div><img class="nk-img" src="{{ asset('images/logo.png') }}" alt="{{ $site_title }}" title="{{ $site_title }}" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>
    <div class="nk-preloader-skip">Skip</div>
</div>
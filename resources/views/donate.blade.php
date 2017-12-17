@extends('layouts.master')

@section('title', 'Donate')

@section('content')
    <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <div style="background-image: url({{ asset('images/header2.jpg') }})"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container"><h1 class="nk-title">Let's Grow Together</h1></div>
            </div>
        </div>
    </div>
    <!-- END: Header Title -->
    <div class="container">
        <div class="nk-gap-4"></div>
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="row no-gutters">
                    <div class="col-md-12 ">
                        <div class="nk-box-3 bg-dark-1">
                            <div class="nk-ibox">
                                <div class="nk-ibox-icon nk-ibox-icon-circle">
                                    <i class="fa fa-paypal"></i></div>
                                <div class="nk-ibox-cont">
                                    <h2 class="nk-ibox-title">Donate to keep improving the application.</h2>
                                    <p>First of all, this donations are for you, because everything we do on this website is for you. Below you have a list of what we will add in the near future.</p>
                                    <p>You donate on this link&nbsp;<a title="Paypal Link Donate" href="https://paypal.me/CodrinAxinte" target="_blank" rel="noopener noreferrer">paypal.me/CodrinAxinte</a> and I will take care of these things</p>
                                    <ul style="text-align: left;">
                                        <li style="text-decoration: line-through;">First things first, will be a <strong>professional looking design</strong> to please our eyes.</li>
                                        <li><strong>Improving the Ore Calculator</strong> adding some more features</li>
                                        <li><strong>Blog Platform</strong></li>
                                        <li>Adding a '<strong>Tutorials and Guides</strong>' for everybody. Here you will have guidings for fitting, techniques and other tutorials.</li>
                                        <li><strong>Automatic retrieval</strong>, from&nbsp; <em>item hangar</em> in <strong>Haras - Krysis Guard</strong>, of the <strong>ores</strong>. So instead of adding your ores, let the magic do it for you and you just copy the price. Yes, it's possible. ;)</li>
                                        <li><strong>Features Proposal</strong>. You will be our best adviser what to add, to improve. Tell us what you would like, you would need to have in the corp or on the app.</li>
                                        <li><strong>Desktop Application</strong></li>
                                        <li><strong>Mobile Application</strong></li>
                                        <li><strong>Forum</strong></li>
                                        <li><strong>More to come</strong>...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
        <div class="nk-gap-4"></div>
    </div>
@endsection
@extends('base.main')
@section('content')
<div class="page-content">
    <div class="page-title page-title-large">
        <h2 data-username="Enabled!" class="greeting-text"></h2>
        <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ asset('images/5s.png')}}"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="210">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('images/20s.jpg')}}">
        </div>
    </div>
    <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
        <div class="card rounded-l shadow-l" data-card-height="320">
            <div class="card-bottom">
                <h1 class="font-24 font-700">Meet Azures</h1>
                <p class="boxed-text-xl">
                     Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                </p>
            </div>
            <div class="card-overlay bg-gradient-fade"></div>
            <div class="card-bg owl-lazy" data-src="{{ asset('images/17m.jpg')}}">
            </div>
        </div>
        <div class="card rounded-l shadow-l" data-card-height="320">
            <div class="card-bottom">
                <h1 class="font-24 font-700">Beyond Powerful</h1>
                <p class="boxed-text-xl">
                     Azures is a Mobile Web App Kit, fully featured, supporting PWA and Native Dark Mode!
                </p>
            </div>
            <div class="card-overlay bg-gradient-fade"></div>
            <div class="card-bg owl-lazy" data-src="{{ asset('images/8m.jpg')}}">
            </div>
        </div>
        <div class="card rounded-l shadow-l" data-card-height="320">
            <div class="card-bottom">
                <h1 class="font-24 font-700">A-Level Quality</h1>
                <p class="boxed-text-xl">
                     We build custom, premium products, that are easy to use and provide all features for you!
                </p>
            </div>
            <div class="card-overlay bg-gradient-fade"></div>
            <div class="card-bg owl-lazy" data-src="{{ asset('images/14m.jpg')}}">
            </div>
        </div>
    </div>
    <div class="content mt-0">
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight">Tap to Absen</a>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="card card-style mb-0">
            <div class="content text-center">
            <h2>How to Absen?</h2>
            <p class="boxed-text-xl">
                 Our products are designed to simplify the way you code a page, with focus on easy, copy and paste.
            </p>
        </div>
        <div class="divider divider-small mb-3 bg-highlight"></div>
        <div class="content">
            <div class="d-flex mb-4 pb-3">
                <div>
                    <i class="far fa-star color-yellow1-dark fa-3x pt-3 icon-size"></i>
                </div>
                <div>
                    <h5 class="font-16 font-600">Find your Style</h5>
                    <p>
                         We've included multiple styles you can choose to match your exact project needs.
                    </p>
                </div>
            </div>
            <div class="d-flex mb-4 pb-3">
                <div>
                    <i class="fa fa-mobile-alt color-blue2-dark fa-3x pt-3 icon-size"></i>
                </div>
                <div>
                    <h5 class="font-16 font-600">Paste your Blocks</h5>
                    <p>
                         Just choose the blocks you like, copy and past them, add your text and that's it!
                    </p>
                </div>
            </div>
            <div class="d-flex mb-2">
                <div>
                    <i class="far fa-check-circle color-green1-dark fa-3x pt-3 icon-size"></i>
                </div>
                <div>
                    <h5 class="font-16 font-600">Publish your Page</h5>
                    <p>
                         Done with copy pasting? Your mobile site is now ready! Publish it or create an app!
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-card card shape-rounded" data-card-height="230">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg">
            </div>
        </div>
    </div>
</div>
<div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over"></div>
<div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over"></div>
<div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-welcome" data-menu-effect="menu-over"></div>
<div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="350" data-menu-effect="menu-parallax">
    <div class="boxed-text-l mt-4">
        <img class="rounded-l mb-3" src="images/icons-icon-128x128.png" alt="img" width="90">
        <h4 class="mt-3">Azures on your Home Screen</h4>
        <p>
             Install Azures on your home screen, and access it just like a regular app. It really is that simple!
        </p>
        <a href="#" class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to Home Screen</a><br>
        <a href="#" class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe later</a>
        <div class="clear"></div>
    </div>
</div>
<div id="menu-install-pwa-ios" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="320" data-menu-effect="menu-parallax">
    <div class="boxed-text-xl mt-4">
        <img class="rounded-l mb-3" src="images/icons-icon-128x128.png" alt="img" width="90">
        <h4 class="mt-3">Azures on your Home Screen</h4>
        <p class="mb-0 pb-3">
             Install Azures on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
        </p>
        <div class="clear"></div>
        <a href="#" class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe later</a><br>
        <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
    </div>
</div>
@endsection
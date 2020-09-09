@extends('base.main')
@section('content')
<div class="page-content pb-0">
        <div class="cover-slider owl-carousel mb-0">
            <div class="card bg-9" data-card-height="cover">
                <div class="card-center text-center">
                    <h1 class="font-34 color-theme font-800">I ~ Attandace</h1>
                    <h4 class="font-300 color-highlight">Attandace Mobile App</h4>
                    <p class="boxed-text-xl pt-4 font-14">
                        Welcome to I - Attendance. 
                        Mobile Attendance Apps and Sites are made easy, made to work very quickly and very easy to use
                    </p>
                </div>
                <div class="card-bottom mb-5 pb-4">
                    <a href="#" class="next-slide-user btn btn-center-m btn-m bg-highlight rounded-sm font-900 text-uppercase scale-box">Start Here</a>
                </div>
                <div class="card-overlay bg-theme opacity-95"></div>
            </div>
            
            <div class="card bg-9" data-card-height="cover">
                <div class="card-center text-center">
                    <h1 class="font-36 color-theme font-800">Dark Mode</h1>
                    <p class="font-14 mt-n1 color-highlight">Turn Off The Lights with a Tap</p>
                    <p class="boxed-text-xl font-14">
                         I - Attandace has native dark mode implemented, that means, I - Attandance will adapt to a color change!
                    </p>
                </div>
                <div class="card-bottom ml-4 mr-4 mb-5">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" data-toggle-theme-switch class="btn-full btn btn-m btn-border border-highlight color-highlight rounded-sm font-900 text-uppercase"> Dark Mode</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="next-slide-user btn-full btn btn-m bg-highlight color-white rounded-sm font-900 text-uppercase scale-box">Next Slide</a>
                        </div>
                    </div>
                </div>
                <div class="card-overlay bg-theme opacity-95"></div>
            </div>
            <div class="card bg-9" data-card-height="cover">
                <div class="card-center text-center">
                    <h1 class="font-36 color-theme font-800">And Much More</h1>
                    <p class="font-18 font-300 mt-n1 color-highlight">Explore I - Attandance! It's super powerful!</p>
                    <p class="boxed-text-xl font-14">
                         There are so many features, we can't describe them all! Start exploring and get Attandace Today!
                    </p>
                </div>
                <div class="card-bottom ml-4 mr-4 mb-5 pb-4">
                    <a href="{{ route('home') }}" class="btn-center-l btn btn-m bg-highlight color-white rounded-sm font-900 text-uppercase scale-box">Let's Start</a>
                </div>
                <div class="card-overlay bg-theme opacity-95"></div>
            </div>
        </div>
    </div>

@endsection
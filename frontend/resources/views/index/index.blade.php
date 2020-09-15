<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>E - Attendances</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles-bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css-fontawesome-all.min.css')}}">
    <link rel="manifest" href="{{ asset('_manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/icons-icon-192x192.png')}}">
    <link rel="stylesheet" href="{{ asset('js/dropzone.min.css') }}">
    <style type="text/css">
        em{
            display: none !important;
        }
        .field-icon {
            float: right;
            margin-right: 10px;
            margin-top: -40px;
            position: relative;
            z-index: 2;
        }
    
    </style>
</head>
<body class="theme-light" data-highlight="blue2">
<div id="preloader">
    <div class="spinner-border color-highlight" role="status"></div>
</div>
<div id="page">
<div class="page-content pb-0">
        <div class="cover-slider owl-carousel mb-0">
            <div class="card bg-9" data-card-height="cover">
                <div class="card-center text-center">
                    <h1 class="font-34 color-theme font-800">E ~ Attandace</h1>
                    <h4 class="font-300 color-highlight">Attandace Mobile App</h4>
                    <p class="boxed-text-xl pt-4 font-14">
                        Welcome to E - Attendance. 
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
                         E - Attandace has native dark mode implemented, that means, I - Attandance will adapt to a color change!
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
                    <p class="font-18 font-300 mt-n1 color-highlight">Explore E - Attandance! It's super powerful!</p>
                    <p class="boxed-text-xl font-14">
                         There are so many features, we can't describe them all! Start exploring and get Attandace Today!
                    </p>
                </div>
                <div class="card-bottom ml-4 mr-4 mb-5 pb-4">
                    <a onclick="redirectLogin()" class="btn-center-l btn btn-m bg-highlight color-white rounded-sm font-900 text-uppercase scale-box">Let's Start</a>
                </div>
                <div class="card-overlay bg-theme opacity-95"></div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="{{ asset('js/6126-scripts-jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/6176-scripts-bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/4392-scripts-custom.js')}}"></script>
<script type="text/javascript">
    //Activating the function to show the shape at the bottom
    function redirectLogin() {
      window.location = "{{ route('login') }}";
    }
</script>

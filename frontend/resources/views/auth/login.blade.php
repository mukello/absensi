<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Absenku</title>

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
    
    <div class="page-content">
        <div class="page-title page-title-small">
            <h2>Sign In</h2>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg bg-20"></div>
        </div>
        <div class="card card-style">
            <div class="content">
                <h4 class="font-600">Let's get Started</h4>
                <p>
                     Select the page you want to see first. You can always come back to this menu later on.
                </p>
            </div>
        </div>
        
        <div class="card card-style">
            <div class="content mt-2 mb-0" id="form-login">
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <em>(required)</em>
                    <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    
                    <em>(required)</em>
                    <input id="password" type="password"  name="password" required autocomplete="current-password" placeholder="Password">
                    <i id="password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></i>



                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="input-style ">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember" style="margin-top: -10px;">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="button" id="btn-login" style="border: 0;" class="btn btn-block btn-sm mt-2 mb-4 btn-full bg-highlight rounded-sm text-uppercase font-900">
                    {{ __('Login') }}
                </button>

                </form>

                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/6126-scripts-jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/6176-scripts-bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/4392-scripts-custom.js')}}"></script>
<script src="{{ asset('app.js') }}"></script>
@include('base.modal')
@include('base.notification')

<script type="text/javascript">

    $(".toggle-password").click(function() {
        var x = document.getElementById("password");
        var element = document.getElementById("password-field");
        

        if (x.type === "password") {
            x.type = "text";
            element.classList.remove("fa-eye-slash");
            element.classList.add("fa-eye");
        } else {
            x.type = "password";
            element.classList.add("fa-eye-slash");
            element.classList.remove("fa-eye");
        }   
    });
    
</script>


@extends('base.main')
@section('title_page') @lang('lang.page_home_title') @endsection
@section('content')
    
    <!-- LOAD NEWS  -->
    <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
        <!-- @foreach($news as $newses) -->
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">Title News</h1>
                    <p class="boxed-text-xl" style="text-align: justify;">
                        .. <a href="" style="color: #afabab;"><i>Readmore</i></a>
                    </p>

                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy" data-src="{{ asset('images/17m.jpg')}}">
                </div>
            </div>
        <!-- @endforeach -->
    </div>
    

    <div class="content mt-0">
        <div class="row">
            <div class="col-12">
            @if(count($check_attand) > 0)
            
            @else
            <button type="button" onclick="getLocation()" id="btn-tap-attand" style="border: 0;" class="btn btn-block btn-sm mt-2 mb-4 btn-full bg-highlight rounded-sm text-uppercase font-900">
                @lang('lang.button_tap_attend')
            </button>
            @endif
            </div>
        </div>
    </div>

    @if(count($check_attand) > 0)
        <div class="card card-style" style="margin-top: -30px;">
            <div class="content">
                <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl color-highlight" role="alert">
                        <span><i class="fa fa-check"></i></span>
                        <strong>@lang('lang.success_absen')</strong>
                </div>
                <div class="divider divider-margins"></div>
                <p>
                    @lang('lang.success') <b>{{ $model->name }}</b>,<br> @lang('lang.success_greeting')
                </p>
            </div>
        
            <div class="divider divider-margins"></div>

            @foreach($check_attand as $check)
                <div class="content mt-0">
                    <h1 class="mb-n2 font-15 font-700">{{ $model->name }}, {{ date('d M Y', strtotime($check->check_in)) }}</h1>
                    <h1 style="margin-top: -17px !important;" class="float-right color-highlight color-white rounded-sm shadow-l font-12 font-400 p-1 px-2 mt-0 mb-3">{{ date('H:i', strtotime($check->check_in)) }} WIB</h1>
                    <p class="mb-2 font-10">
                        <i class="fa fa-check-circle color-highlight scale-icon mr-2"></i>{{ $check->location }}
                    </p>
                    <p>
                        <i>{{ $check->notes }}</i>
                    </p>
                </div>
            @endforeach
        
        </div>
    @endif

    
    @if(count($check_attand) > 0)

    @else
    <<!-- div class="footer">
        <div class="card card-style mb-0" style="margin-top: -19px;">
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
        
    </div> -->
    @endif



@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function(){
    var day = new Date();
    var hr = day.getHours();
    if (hr >= 0 && hr < 12) {
        document.getElementById("greeting-text").innerHTML = "@lang('lang.good_morning')";
    } else if (hr >= 12 && hr <= 18) {
        document.getElementById("greeting-text").innerHTML = "@lang('lang.good_afternoon')";
    } else {
        document.getElementById("greeting-text").innerHTML = "@lang('lang.good_night')";
    }

    getLocation();

});
</script>
@endpush
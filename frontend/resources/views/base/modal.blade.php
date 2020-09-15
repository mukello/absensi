
<div id="menu-tips-2" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="450" data-menu-effect="menu-over">
    <div class="card header-card shape-rounded" data-card-height="200">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg">
        </div>
    </div>
    <div class="mt-3 pt-1 pb-1">
    <h1 class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none" style="width: 60px; height: 60px;"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
    </h1>
    <h1 class="text-center color-white font-22 font-700">@lang('lang.attend_now')</h1>
    <p class="text-center mt-n3 mb-3 font-11 color-white">@lang('lang.detail_attend_now')</p>
    </div>
    <div class="card card-style">
        <div class="content" id="form-body">
            <form action="{{ route('attandance.attandance.store') }}" method="POST">
                @csrf
                <input type="hidden" name="lat" id="lat">
                <input type="hidden" name="long" id="long">

                <p>
                    @lang('lang.detail_attend')
                </p>
            
                <div class="input-style input-style-2 mt-4">
                    <span class="input-style-1-active">@lang('lang.notes') </span>
                    <textarea class="form-control" name="notes"></textarea>
                </div>

                <div class="input-style input-style-2 mt-4">
                    <button style="border: none;" class="attandance_now btn btn-sm btn-block  rounded-sm btn-full shadow-l bg-highlight text-uppercase font-900">@lang('lang.attend_now')</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- =========================================
    * Modal Language *
========================================== -->
<div id="menu-language" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="345" data-menu-effect="menu-over">
    <div class="mr-3 ml-3 mt-3">
        <div class="float-left">
            <h3 class="font-700 mb-0 pt-1">@lang('lang.title_language')</h3>
            <p class="font-11 mt-n1 color-highlight mb-3">@lang('lang.detail_language')</p>
        </div>
        <div class="float-right">
            <a href="#" class="close-menu"><i class="fa fa-times-circle color-red2-dark pt-3 font-18"></i></a>
        </div>
        <div class="clearfix"></div>
        <div class="list-group list-custom-small">
            <a href="#">
                <img class="mr-3 mt-n1" width="20" src="https://cdn.webshopapp.com/shops/94414/files/54029380/indonesia-flag-icon-free-download.jpg"><span>@lang('lang.indonesia')</span><i class="fa fa-angle-right"></i>
            </a>
            <a href="#">
                <img class="mr-3 mt-n1" width="20" src="{{ asset('images/flags-United-States.png')}}"><span>@lang('lang.english')</span><i class="fa fa-angle-right"></i>
            </a>
            <a href="#">
                <img class="mr-3 mt-n1" width="20" src="https://cdn.webshopapp.com/shops/94414/files/53642776/china-flag-icon-free-download.jpg"><span>@lang('lang.china')</span><i class="fa fa-angle-right"></i>
            </a>
            <a href="#">
                <img class="mr-3 mt-n1" width="20" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Flag_of_South_Korea.png/1024px-Flag_of_South_Korea.png"><span>@lang('lang.korea')</span><i class="fa fa-angle-right"></i>
            </a>
            <a href="#">
                <img class="mr-3 mt-n1" width="20" src="https://upload.wikimedia.org/wikipedia/commons/a/af/Flag_of_Japan_bordered.png"><span>@lang('lang.japanese')</span><i class="fa fa-angle-right"></i>
            </a>
            
        </div>
        <div class="clear"></div>
    </div>
</div>

<!-- =========================================
    * Modal Color *
========================================== -->
<div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="510" data-menu-effect="menu-over">
    <div class="card header-card shape-rounded h-40">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg">
        </div>
    </div>
    <h1 class="text-center color-white mt-4 font-35 font-800">E - Attendance</h1>
    <p class="text-center color-white font-12 mt-n1 pb-2 mb-3">@lang('lang.detail_color')</p>
    <div class="card card-style">
        <div class="highlight-changer pt-3 pb-2">
            <p class="text-center">
                @lang('lang.detail_color2')
            </p>
            <a href="#" data-change-highlight="blue2">
                <i class="fa fa-circle color-blue2-dark"></i>
                <span class="color-blue2-light">@lang('lang.default')</span>
            </a>

            <a href="#" data-change-highlight="red2">
                <i class="fa fa-circle color-red1-dark"></i>
                <span class="color-red2-light">@lang('lang.red')</span>
            </a>

            <a href="#" data-change-highlight="orange">
                <i class="fa fa-circle color-orange-dark"></i>
                <span class="color-orange-light">@lang('lang.orange')</span>
            </a>

            <a href="#" data-change-highlight="pink2">
                <i class="fa fa-circle color-pink2-dark"></i>
                <span class="color-pink2-light">@lang('lang.pink')</span>
            </a>

            <a href="#" data-change-highlight="magenta2">
                <i class="fa fa-circle color-magenta2-dark"></i>
                <span class="color-magenta2-light">@lang('lang.purple')</span>
            </a>

            <a href="#" data-change-highlight="aqua">
                <i class="fa fa-circle color-aqua-dark"></i>
                <span class="color-aqua-light">@lang('lang.aqua')</span>
            </a>

            <a href="#" data-change-highlight="teal">
                <i class="fa fa-circle color-teal-dark"></i>
                <span class="color-teal-light">@lang('lang.teal')</span>
            </a>

            <a href="#" data-change-highlight="mint">
                <i class="fa fa-circle color-mint-dark"></i>
                <span class="color-mint-light">@lang('lang.mint')</span>
            </a>

            <a href="#" data-change-highlight="green2">
                <i class="fa fa-circle color-green2-dark"></i>
                <span class="color-green2-light">@lang('lang.green')</span>
            </a>

            <a href="#" data-change-highlight="green1">
                <i class="fa fa-circle color-green1-dark"></i>
                <span class="color-green1-light">@lang('lang.grass')</span>
            </a>

            <a href="#" data-change-highlight="yellow2">
                <i class="fa fa-circle color-yellow2-dark"></i>
                <span class="color-yellow2-light">@lang('lang.sunny')</span>
            </a>

            <a href="#" data-change-highlight="yellow1">
                <i class="fa fa-circle color-yellow1-dark"></i>
                <span class="color-yellow1-light">@lang('lang.goldish')</span>
            </a>

            <a href="#" data-change-highlight="brown1">
                <i class="fa fa-circle color-brown1-dark"></i>
                <span class="color-brown1-light">@lang('lang.wood')</span>
            </a>

            <a href="#" data-change-highlight="dark1">
                <i class="fa fa-circle color-dark1-dark"></i>
                <span class="color-dark1-light">@lang('lang.night')</span>
            </a>

            <a href="#" data-change-highlight="dark2">
                <i class="fa fa-circle color-dark2-dark"></i>
                <span class="color-dark2-light">@lang('lang.dark')</span>
            </a>

            <div class="clearfix"></div>
        </div>
    </div>
    <a href="#" class="close-menu btn btn-full btn-margins rounded-sm shadow-l bg-highlight btn-m font-900 text-uppercase mb-0">@lang('lang.close_color')</a>
</div>






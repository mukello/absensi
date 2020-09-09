<div id="menu-tips-2" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="350" data-menu-effect="menu-over">
    <div class="card header-card shape-rounded" data-card-height="200">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg">
        </div>
    </div>
    <div class="mt-3 pt-1 pb-1">
        <h1 class="text-center">
            <i data-feather="upload-cloud" data-feather-line="1" data-feather-size="60" data-feather-color="gray1-dark" data-feather-bg="none"></i></h1>
        <h1 class="text-center color-white font-22 font-700">Attandance</h1>
        <p class="text-center mt-n3 mb-3 font-11 color-white"> 17 Augst 2020</p>
    </div>
    <div class="card card-style">
        <div class="content" id="form-body">
            <form action="Samp=le" method="POST">
                @csrf

                <p>
                    Jika anda perlu mengisi sebuah alasan, maka silahkan lengkapi form.
                </p>
            
                <div class="input-style input-style-2 mt-4">
                    <span class="input-style-1-active">Notes </span>
                    <textarea class="form-control" name="notes"></textarea>
                </div>

                <div class="input-style input-style-2 mt-4">
                    <a class="attandance_now btn btn-m btn-margins rounded-sm btn-full shadow-l bg-highlight text-uppercase font-900">Attandance Now!</a>
                </div>
            </form>
        </div>
    </div>
    
</div>
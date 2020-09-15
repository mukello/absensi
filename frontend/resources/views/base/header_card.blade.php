@php
	$url =  ucwords(substr(URL::current(), 22));
@endphp

@if($url != 'Home')
	<div class="page-title page-title-small">
		<h2>
			<a href="#" data-back-button=""><i class="fa fa-arrow-left"></i></a>@yield('title_page')
		</h2>
		<a href="#" class="image-profile-page bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ isset(Auth::user()->photo) && Auth::user()->photo != null ? Auth::user()->photo : 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdc_pViMeba37-qxWAWLBm1Bn5XeQWZoadWA&usqp=CAU' }}"></a>
	</div>
	<div class="card header-card {{ $themes[$randIndex] }}" data-card-height="150" style="height: 150px;">
		<div class="card-overlay bg-highlight opacity-95"></div>
		<div class="card-overlay dark-mode-tint"></div>
		<div class="card-bg bg-20"></div>
	</div>
@else
<div class="page-title page-title-large">
    <h2 id="greeting-text"></h2>
    <h2 style="color: white; font-size: 22px !important; margin-top: -2px;">{{ $sayTo }}!</h2>
    @if($model->photo != "")
        <a href="#" class="image-profile bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ $model->photo }}"></a>
    @else

        <a href="#" class="image-profile bg-fade-gray1-dark shadow-xl preload-img" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdc_pViMeba37-qxWAWLBm1Bn5XeQWZoadWA&usqp=CAU"></a>

    @endif 
</div>

<div class="card header-card {{ $themes[$randIndex] }}" data-card-height="210">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg">
        </div>
    </div>
@endif
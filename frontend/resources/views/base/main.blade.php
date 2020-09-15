<!DOCTYPE HTML>
<html lang="en">
<head>
	@include('base.head')
</head>
<body class="theme-light" data-highlight="blue2">
<div id="preloader">
	<div class="spinner-border color-highlight" role="status"></div>
</div>

@php
	$url =  ucwords(substr(URL::current(), 22));

    $themes = [
        'shape-cut-left','shape-cut-right','shape-rounded'
    ];

    $randIndex = array_rand($themes, 1);

@endphp

<div id="page">

	@include('base.navbar')
	
	<div class="page-content" {{ $url }} style="margin-bottom: -60px;">
		
			@include('base.header_card')

			@yield('content')

		
			@include('base.footer_card')

	</div>

	
	@include('base.menu')
	@include('base.modal')
	@include('base.notification')

	

</div>
@include('base.script')
</body>
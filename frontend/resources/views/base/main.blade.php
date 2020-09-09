<!DOCTYPE HTML>
<html lang="en">
<head>
@include('base.head')
</head>
<body class="theme-light" data-highlight="blue2">

<div id="preloader">
	<div class="spinner-border color-highlight" role="status"></div>
</div>

<div id="page">

	@yield('content')

	@include('base.modal')
	
</div>
@include('base.script')
</body>
</html>
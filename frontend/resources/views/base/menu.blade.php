@php
 $url =  ucwords(substr(URL::current(), 22));
 
@endphp

<div id="footer-bar" class="footer-bar-5" style="width: 100%;">

	

	<button  class="head-button-size blue-bg" ui-sref="start">
    	<div style="text-align:center">
      		<i style="margin-left:5px;" data-feather="calendar" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i>
      		<br>
      		<span class="head-mini-text">Event</span>
    	</div>
  	</button>

  	<button  class="head-button-size blue-bg" ui-sref="start">
    	<div style="text-align:center">
      		<i style="margin-left:5px;" data-feather="airplay" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i>
      		<br>
      		<span class="head-mini-text">News</span>
    	</div>
  	</button>

	<button onclick="fHome()" class="head-button-size blue-bg" ui-sref="start">
    	<div style="text-align:center">
      		<i style="margin-left:5px;" class="head-material" data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i>
      		<br>
      		<span class="head-mini-text">Home</span>
    	</div>
  	</button>

  	<button onclick="fProfile()" class="head-button-size blue-bg" ui-sref="start">
    	<div style="text-align:center">
      		<i style="margin-left:5px;" data-feather="user" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i>
      		<br>
      		<span class="head-mini-text">Profile</span>
    	</div>
  	</button>

  	<button onclick="fSetting()" class="head-button-size blue-bg" ui-sref="start">
    	<div style="text-align:center">
      		<i style="margin-left:5px;" data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i>
      		<br>
      		<span class="head-mini-text">Settings</span>
    	</div>
  	</button>

	

	
	
</div>

<script>
function fProfile() {
  	window.location.href = "{{ route('profile.profile.index')."#loaded" }}";
}

function fHome() {
  	window.location.href = "{{ route('home.home.index')."#loaded" }}";
}

function fSetting() {
  	window.location.href = "{{ route('settings.settings.index')."#loaded" }}";
}
</script>

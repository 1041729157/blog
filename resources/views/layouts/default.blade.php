<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<title>@yield('title', '首页') - {{ setting('site_name', 'WE旅游网') }}</title>
<meta name="description" content="@yield('description', setting('seo_description', 'WE旅游爱好者社区。'))" />
<meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'WE,社区,论坛'))" />
<link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('css/swipebox.css') }}" type="text/css" rel="stylesheet" media="all">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script type="application/x-javascript"> 
	addEventListener("load", function() { 
		setTimeout(hideURLbar, 0); 
	}, false); 
		function hideURLbar(){ 
			window.scrollTo(0,1); 
	} 
</script>

<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>  
<script src="{{ asset('js/bootstrap.js') }}"></script>  

<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
@yield('styles')
<!--//end-smoth-scrolling-->
</head>
<body>
	<div id="app" class="{{ route_class() }}-page">
		@include('layouts._header')
		<div class="body-content" id="body-content">
			@include('messages._session')
			@yield('content')
		</div>
			@include('layouts._footer')
		
	</div>
	
	@if (app()->isLocal())
		@include('sudosu::user-selector')
	@endif
	
	@yield('scripts')

</body>
</html>
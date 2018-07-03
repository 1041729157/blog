@extends('layouts.default')

@section('title', '画廊')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}" class="active">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('content')
	<div class="gallery">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Gallery</li>
			</ol>
			<div class="tesimonial"><h3>Gallery</h3></div>
			<div class="gallry-info">
				<div class="col-md-3 gallery-grids">
					<a href="images/img33.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img33.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img31.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img34.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img33.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img35.jpg" class="img-responsive glry-img " alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img32.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img36.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallry-info">
				<div class="col-md-3 gallery-grids">
					<a href="images/img37.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img37.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img38.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img38.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img39.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img39.jpg" class="img-responsive glry-img " alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img40.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img40.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallry-info">
				<div class="col-md-3 gallery-grids">
					<a href="images/img41.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img41.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img42.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img42.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img28.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img28.jpg" class="img-responsive glry-img " alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/img24.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="images/img24.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>	
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		})( jQuery );
	</script>
@stop
@extends('layouts.default')

@section('nav')
	<li><a href="{{ route('index') }}" class="active">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('content')
	
	<div class="banner">
		<!-- banner-text Slider starts Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
					// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider3").responsiveSlides({
							auto: true,
							pager:false,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						});	
					});
				</script>
			<!--//End-slider-script -->
			<div class="banner-title"> 
				<div class="container">
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<h5>奇妙的旅行</h5>
								<!-- <h1>莫斯科除外</h1> -->
							</li>
							<!-- <li>
								<h5>辛托卡</h5>
								<h1>Cupiditate non provident molepturi </h1>
							</li>
							<li>
								<h5>特例</h5>
								<h1>Non provident sint occaestiasexce</h1>
							</li> -->
						</ul>	
					</div>
				</div>
            </div>	
	</div>		
	<div class="banner-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-4 bb-grids">
					<a href="{{ route('details') }}" class="thumbnail">
					  <img src="images/img1.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4 bb-grids">
					<a href="{{ route('details') }}" class="thumbnail">
					  <img src="images/img2.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4 bb-grids">
					<a href="{{ route('details') }}" class="thumbnail">
					  <img src="images/img3.jpg" alt="">
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="row">
				<div class="col-md-4 bb-grids">
					<a href="{{ route('details') }}" class="thumbnail">
					  <img src="images/img4.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4 bb-grids">
					<a href="{{ route('details') }}" class="thumbnail">
					  <img src="images/img5.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4 bb-grids">
					<a href="{{ route('details') }}" class="thumbnail">
					  <img src="images/img6.jpg" alt="">
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>	
	<div class="banner-bottom">
		<div class="container">
			<h3>Temporibus autem quibusdam et aut officiis debitis aut rerum </h3>
			<p>Donec vitae tellus non sem vulputate cursus. Aliquam erat volutpat. Proin ut est et sem rhoncus fringilla laoreet at mauris. Integer posuere massa metus. Etiam tortor dui, consectetur quis fringilla nec, suscipit non nibh. Cras velit mauris, consectetur sit amet congue a, dictum vehicula lorem. Etiam imperdiet aliquam sapien, dignissim dapibus lectus imperdiet non. </p>
		</div>
	</div>	
	<div class="features">
		<div class="container">
			<h3>Necessitatibus saepe</h3>
			<div class="row">
				<div class="col-sm-6 col-md-4 featur-grids">
					<div class="thumbnail feature-thmbnl">
						<h4>Gilla frinreet</h4>
						<img src="images/img7.jpg" alt="">
						<div class="caption">
							<h5><a href="{{ route('details') }}">Aliquam erat volutpat<a></h5>
							<p>Donec vitae tellus non sem vulputate cursus. Aliquam erat volutpat. Proin ut est et sem rhoncus fringilla laoreet</p>
							<a href="{{ route('details') }}" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 featur-grids">
					<div class="thumbnail feature-thmbnl">
						<h4>Gilla frinreet</h4>
						<img src="images/img8.jpg" alt="">
						<div class="caption">
							<h5><a href="{{ route('details') }}">Aliquam erat volutpat<a></h5>
							<p>Donec vitae tellus non sem vulputate cursus. Aliquam erat volutpat. Proin ut est et sem rhoncus fringilla laoreet</p>
							<a href="{{ route('details') }}" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 featur-grids">
					<div class="thumbnail feature-thmbnl">
						<h4>Gilla frinreet</h4>
						<img src="images/img9.jpg" alt="">
						<div class="caption">
							<h5><a href="{{ route('details') }}">Aliquam erat volutpat<a></h5>
							<p>Donec vitae tellus non sem vulputate cursus. Aliquam erat volutpat. Proin ut est et sem rhoncus fringilla laoreet</p>
							<a href="{{ route('details') }}" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@stop
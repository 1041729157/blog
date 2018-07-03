@extends('layouts.default')

@section('title', '旅行')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}" class="active">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('content')
	<div class="tour">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Tours</li>
			</ol>
			<div class="tesimonial"><h3>Tours</h3></div>
			<div class="row tour-info">			
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img23.jpg" class="img-responsive zoom-img " alt="">				
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Princess of hill stations</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img24.jpg" class="img-responsive zoom-img " alt="">				
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Finibus Bonorum et Malorum</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img25.jpg" class="img-responsive zoom-img" alt="">				
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Finibus Bonorum et Malorum</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img26.jpg" class="img-responsive zoom-img" alt="">							
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Princess of hill stations</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img27.jpg" class="img-responsive zoom-img" alt="">						
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Finibus Bonorum et Malorum</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img28.jpg" class="img-responsive zoom-img" alt="">
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Finibus Bonorum et Malorum</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img29.jpg" class="img-responsive zoom-img" alt="">
						</a>
						<div class="caption tour-caption">
							<h3><a href="#">Princess of hill stations</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img30.jpg" class="img-responsive zoom-img" alt="">
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Finibus Bonorum et Malorum</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 tour-grids">
					<div class="thumbnail">
						<a href="{{ route('details') }}" title="">
							<img src="images/img31.jpg" class="img-responsive zoom-img" alt="">
						</a>
						<div class="caption tour-caption">
							<h3><a href="{{ route('details') }}">Finibus Bonorum et Malorum</a></h3>
							<p>Cras justo odiodapibus ac facilisis egestas eget</p>				
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
@stop
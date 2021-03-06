@extends('layouts.default')

@section('title', '推荐信')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}" class="active">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('content')
	<!--tesimonial-->
	<div class="tesimonial">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Testimonials</li>
			</ol>
			<h3>Testimonials</h3>
			<div class="testi-info">
				<div class="testi-left">
					<img src="images/img18.jpg" class="img-circle" alt=""/>
				</div>
				<div class="testi-right">
					<p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>"</span></p>
					<a href="#">Eiusmod</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="testi-info">
				<div class="testi-left">
					<img src="images/img19.jpg" class="img-circle" alt=""/>
				</div>
				<div class="testi-right">
					<p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>"</span></p>
					<a href="#">Adipiscing</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="testi-info">
				<div class="testi-left">
					<img src="images/img20.jpg" class="img-circle" alt=""/>
				</div>
				<div class="testi-right">
					<p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>"</span></p>
					<a href="#">Aliqua</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="testi-info">
				<div class="testi-left">
					<img src="images/img21.jpg" class="img-circle" alt=""/>
				</div>
				<div class="testi-right">
					<p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span>"</span></p>
					<a href="#">Consectetur</a>
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
	<!--//tesimonial-->
@stop
@extends('layouts.default')

@section('title', '博客')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}" class="active">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('search')
	<form class="navbar-form navbar-right" role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="搜话题...">
		</div>
		<button type="submit" class="btn btn-default" aria-label="Left Align">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</button>
	</form>
@stop

@section('content')
	<!--blog-->
	<div class="blog">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="{{ route('index') }}">首页</a></li>
				<li>博客</li>
			</ol>
			<div class="col-md-8 blog-left" >
			
			<div class="panel panel-heading option">
				<ul class="nav nav-pills">
					<li class="{{ active_class( ! if_query('order', 'recent')) }}"><a href="{{ Request::url() }}?order=default">最后回复</a></li>
					<li class="{{ active_class(if_query('order', 'recent')) }}"><a href="{{ Request::url() }}?order=recent">最新发布</a></li>
				</ul>
			</div>

			@if (count($blogs))
				@foreach ($blogs as $blog)
				<div class="blog-info">
					<h4><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h4>
					<p>发布者： <a href="{{ route('users.show', $blog->user_id) }}">{{ $blog->user->name }}</a> &nbsp;&nbsp; {{ $blog->created_at->diffForHumans() }} &nbsp;&nbsp; <a href="#">评论 ({{ $blog->reply_count }})</a></p>
					<div class="blog-info-text">
						<div class="blog-img">
							@if ($blog->images)
							<a href="{{ route('blogs.show', $blog->id) }}"> <img src="{{ $blog->images }}" class="img-responsive zoom-img" alt=""/></a>
							@else 
							<a href="{{ route('blogs.show', $blog->id) }}"> <img src="{{ URL::asset('images/img12.jpg') }}" class="img-responsive zoom-img" alt=""/></a>
							@endif
						</div>
						<h5><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->introduction }}</a></h5>
						<p class="snglp">{{ $blog->excerpt }}</p>
						<a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary hvr-rectangle-in">更 多</a>
					</div>
				</div>
				@endforeach	
			@endif
			</div>
			
			@include('layouts._page_right', ['blogs' => $blog->with('user')->recentReplied()->paginate(2)])

			{!! $blogs->appends(Request::except('page'))->render() !!}
			
			
		</div>	
	</div>	
	<!--//blog-->
@stop
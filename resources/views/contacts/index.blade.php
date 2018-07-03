@extends('layouts.default')

@section('title', '留言详情')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('content')
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-center">
					{{ $contact->name }} · {{ $contact->email }}
				</h4>
				<hr>
				<div style="min-height: 200px">
				给你留言：
				<br><br>
					{!! $contact->content !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop
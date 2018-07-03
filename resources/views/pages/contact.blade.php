@extends('layouts.default')

@section('title', '留言')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}"  class="active">留言</a></li>
@stop

@section('content')
	<div class="contact">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>留言</li>
			</ol>
			<div class="tesimonial"><h3>留言</h3></div>
		</div>	
		<div class="container">
			<div class="contact-form">
				<div class="col-md-4 contact-form-left">
					<h4>说明</h4>
					<p>如果有好的建议或者发现BUG，欢迎给我留言，留言信息只有你本人和站长可见。</p>
					<p>如果你是未注册用户，请务必填写你所使用的正确邮箱，否则站长的反馈信息将无法送到你的手上。</p>
				</div>
				<div class="col-md-8 contact-form-right">
					<h4>留言信息</h4>
					@include('common.error')
					@if (!Auth::check())
					<form action="{{ route('contacts.create') }}" method="POST" accept-charset="UTF-8">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input name="name" type="text" value="{{ old('name') }}" placeholder="你的名字">
						<input name="email" type="email" value="{{ old('email') }}" placeholder="你的邮箱">
					@else 
					<form action="{{ route('contacts.stroy') }}" method="POST" accept-charset="UTF-8">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@endif
						<textarea name="content" type="text" placeholder="你的留言...">{{ old('content') }}</textarea>
						
						<div class="form-group">
							<label for="captcha" class="col-md-12 control-label">验证码：</label>
							<div class="col-md-12">
								<input id="captcha" class="form-control" name="captcha">
								<img class="thumbnail captcha" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="重新获取验证码">
							</div>
						</div>

						<input type="submit" value="提交" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!--//contact-->
@stop
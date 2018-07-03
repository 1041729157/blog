@extends('layouts.default')
@section('title', '无访问权限')

@section('content')
<div class="container content">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-body">
				@if (Auth::check())
				<div class="alert alert-danger text-center">
					当前登陆账号无后台访问权限
				</div>
				@else
				<div class="alert alert-danger text-center">
					请登陆以后再操作
				</div>

				<a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">登陆</a>
				@endif
			</div>
		</div>
</div>
</div>
@stop
@extends('layouts.default')

@if ($blog->id)
	@section('title', '修改话题')
@else 
	@section('title', '新建话题')
@endif

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
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2 class="text-center">
					<i class="glyphicon glyphicon-edit"></i>
					@if ($blog->id)
					编辑话题
					@else 
					新建话题
					@endif
				</h2>

				<hr>

				@include('common.error')

				@if ($blog->id)
				<form action="{{ route('blogs.update', $blog->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ method_field('PATCH') }}
				@else 
				<form action="{{ route('blogs.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				@endif
				{{ csrf_field() }}

				<div class="form-group">
					<input type="text" class="form-control" name="title" value="{{ old('title', $blog->title) }}" placeholder="请填写标题" required>
				</div>

				<div class="form-group">
					<input type="text" class="form-control" name="introduction" value="{{ old('introduction', $blog->introduction) }}" placeholder="简介(可选)">
				</div>

				<div class="form-group">
					<textarea name="body" class="form-control" id="editor" rows="4" placeholder="请填入至少三个字符的内容" required>{{ old('body', $blog->body) }}</textarea>
				</div>

				<div class="form-group">
					<label class="images-field">话题封面图片<span>(可选，不选择则使用系统默认封面)</span></label>
					<input type="file" name="images">
					@if ($blog->images)
						<br>
						<img class="thumbnail img-responsive" src="{{ $blog->images }}" width="200">
					@else 
						<br>
						<img class="thumbnail img-responsive" src="{{ URL::asset('images/img12.jpg') }}" width="200">
					@endif
				</div>

				<div class="well well-sm">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 保存</button>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script>
    $(document).ready(function(){
        var editor = new Simditor({
            textarea: $('#editor'),
            upload: {
            	url: '{{ route('blogs.upload_image') }}', //处理上传图片的 URL
            	params: { _token: '{{ csrf_token() }}' },
            	fileKey: 'upload_file', //服务器端获取图片的键值，设置为 upload_file
            	connectionCount: 3,
                leaveConfirm: '文件上传中，关闭此页面将取消上传。',
            },
            pasteImage: true,  // 是否支持图片黏贴上传
        });
    });
    </script>
@stop
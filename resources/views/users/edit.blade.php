@extends('layouts.default')

@section('title', '个人中心')

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
        <div class="panel panel-default col-md-10 col-md-offset-1">
            <div class="panel-heading" style="background: #fff">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                </h4>
            </div>

            @include('common.error')

            <div class="panel-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input type="text" name="name" class="form-control" id="name-field" value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email-field">邮箱</label>
                        <input type="text" name="email" class="form-control" id="email-field" value="{{ old('email', $user->email) }}" disabled='true'>
                    </div>

                    <div class="form-group">
                        <label for="introduction-field">个人简介</label>
                        <textarea type="text" name="introduction" class="form-control" id="introduction-field" rows="4">{{ old('introduction', $user->introduction) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="avatar-field">用户头像</label>
                        <input type="file" name="avatar">
                        @if ($user->avatar)
                            <br>
                            <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200">
                        @endif
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
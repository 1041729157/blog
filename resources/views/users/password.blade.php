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
                    <i class="glyphicon glyphicon-edit"></i> 修改密码
                </h4>
            </div>

            @include('common.error')

            <div class="panel-body">
                <form action="{{ route('users.update_password', $user->id) }}" method="POST" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email-field">邮箱</label>
                        <input type="text" name="email" class="form-control" id="email-field" value="{{ old('email', $user->email) }}" disabled='true'>
                    </div>

                    <div class="form-group">
                        <label for="password-field">新密码</label>
                        <input type="password" name="password" class="form-control" id="password-field" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">确认密码</label>
                        <input type="password" name="password_confirmation" class="form-control" value="" required>
                    </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
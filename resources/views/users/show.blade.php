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
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div align="center">
                                @if ($user->avatar)
                                    <img class="thumbnail img-responsive" src="{{ $user->avatar }}" >
                                @else
                                    <img class="thumbnail img-responsive" src="{{ URL::asset('images/lx.jpeg') }}">
                                @endif
                                @if (Auth::check())
                                    @include('users._follow_form', ['user' => $user])
                                @endif
                            </div>
                            <div class="media-body">
                                <hr>
                                <h4><strong>个人简介</strong></h4>
                                <p>{{ $user->introduction }}</p>
                                <hr>
                                <h4><strong>注册于</strong></h4>
                                <p>{{ $user->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <span>
                            <h1 class="panel-title pull-left" style="font-size: 30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                        </span>
                    </div>
                </div>

                <hr>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="{{ active_class(if_query('tab', 'blogs')) }}">
                                <a href="{{ route('users.show', [$user->id, 'tab' => 'blogs']) }}">Ta 的话题 ({{ count($user->blogs) }})</a>
                            </li>
                            <li class="{{ active_class(if_query('tab', 'replies')) }}">
                                <a href="{{ route('users.show', [$user->id, 'tab' => 'replies']) }}">Ta 的回复 ({{ count($user->replies) }})</a>
                            </li>
                            <li class="{{ active_class(if_query('tab', 'followings')) }}">
                                <a href="{{ route('users.show', [$user->id, 'tab' => 'followings']) }}">Ta 关注的人 ({{ count($user->followings) }})</a>
                            </li>
                            <li class="{{ active_class(if_query('tab', 'followers')) }}">
                                <a href="{{ route('users.show', [$user->id, 'tab' => 'followers']) }}">Ta 的粉丝 ({{ count($user->followers)}})</a>
                            </li>

                            @if ($user->hasRole('Founder') && Auth::id() == $user->id)
                            <li class="{{ active_class(if_query('tab', 'contacts')) }}">
                                <a href="{{ route('users.show', [$user->id, 'tab' => 'contacts']) }}"> 我的留言 ({{ count($contacts) }})</a>
                            </li>
                            @endif

                        </ul>
                        @if (if_query('tab', 'replies'))
                            @include('users._replies', ['replies' => $user->replies()->paginate(10)])
                        @elseif (if_query('tab', 'contacts'))
                            @include('users._contacts', $contacts)
                        @elseif (if_query('tab', 'followings'))
                            @include('users._followings', ['followings' => $user->followings()->paginate(10)])
                        @elseif (if_query('tab', 'followers'))
                            @include('users._followers', ['followers' => $user->followers()->paginate(10)])
                        @else
                            @include('users._blogs', ['blogs' => $user->blogs()->recent()->paginate(10)])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
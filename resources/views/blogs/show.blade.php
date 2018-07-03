@extends('layouts.default')

@section('title', '话题详情')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">留言</a></li>
@stop

@section('search')
	<form class="navbar-form navbar-right" role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default" aria-label="Left Align">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</button>
	</form>
@stop

@section('content')
	
	<!--single-page-->
	<div class="single-page">
		<div class="container">
			<div class="work-title sngl-title">
				<ol class="breadcrumb">
					<li><a href="index.html">首页</a></li>
					<li class="active">话题详情</li>
				</ol>
			</div>
			<div class="col-md-8 single-page-left">
				<div class="single-page-info">
					<!-- @include('messages._session') -->
					<h4>{{ $blog->title }}</h4>
					<hr>
					<!-- @if ($blog->images)
					<img src="{{ $blog->images }}" alt=""/>
					@else
					<img src="{{ URL::asset('images/img12.jpg') }}" alt=""/>
					@endif -->
					<h5>简介：{{ $blog->introduction }}</h5>

					<div class="blog-body">
						{!! $blog->body !!}
					</div>
					
					@can ('update', $blog)
					<div class="blog-operation">
						<form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button type="submit">
								<i class="glyphicon glyphicon-trash"></i> 删除
							</button>
						</form>
						<a href="{{ route('blogs.edit', $blog->id) }}">
							<i class="glyphicon glyphicon-edit"></i> 编辑
						</a>
					</div>
					@endcan
					
					<div class="comment-icons">
						<ul>
							<li><span></span><a href="#">好好学习，天天向上</a> </li>
							<li><span class="clndr"></span><a href="#">{{ $blog->created_at->diffForHumans() }}</a></li>
							<li><span class="admin"></span> <a href="#">{{ $blog->user->name }}</a></li>
							<li><span class="cmnts"></span> <a href="#">{{ $blog->reply_count }}</a></li>
							<li><a href="#" class="like">15</a></li>
						</ul>
					</div>
				</div>
				<!--//related-posts-->
				
				<div class="reply-box" id="reply-box">
					<form action="{{ route('replies.reply') }}" method="POST" accept-charset="UTF-8">
						{{ csrf_field() }}
						<input type="hidden" name="blog_id" value="{{ $blog->id }}">
						<div class="form-group">
							<textarea class="form-control" rows="4" placeholder="" name="content"></textarea>
						</div>
						<button type="submit" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-share-alt"></i> 回复</button>
					</form>
				</div>

				<div class="response">
					<!-- <h4>回复</h4> -->
					<hr>
					@if ($replies)
					@foreach($replies as $reply)
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="{{ route('users.show', $reply->user_id) }}">
								<!-- <img class="media-object" src="{{ URL::asset('images/icon1.png') }}" alt=""/> -->
								<img class="media-object" src="{{ $reply->user->avatar }}" alt=""/>
								<!-- @if (Auth::check())
									@include('users._follow_form', ['user' => $reply->user])
								@endif -->
							</a>
							
						</div>
						<div class="media-body response-text-right">
							<h5><a href="{{ route('users.show', $reply->user_id) }}">{{ $reply->user->name }}</a></h5>
							<ul class="">
								<li>{{ $reply->created_at->diffForHumans() }}</li>
								<li><a href="javascript:;" class="reply_btn">回复(0)</a></li>
								@can ('destroy', $reply)
								<li>
									<form action="{{ route('replies.destroy', $reply->id) }}" method="POST">
										{{ csrf_field() }}
                            			{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-default">
											<i class="glyphicon glyphicon-trash"></i>
										</button>
									</form>
								</li>
								@endcan
							</ul>
							<div class="reply_content">
								{!! $reply->content !!}
							</div>
							<!-- @include('blogs._replys') -->
							<!-- <div id="reply_textarea" class="col-md-12">
								<textarea name='' cols='40' rows='5'></textarea>
								<br/>
								<input type='submit' value='发表' />
							</div> -->
							
							<!-- <div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="{{ URL::asset('images/icon1.png') }}" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>MARCH 21, 2014</li>
										<li><a href="singlepage.html">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div> -->
						</div>
						<div class="clearfix"> </div>
					</div>
					<hr>
					@endforeach
					@endif
					{!! $replies->render() !!}
					<!-- <div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="{{ URL::asset('images/icon1.png') }}" alt=""/>
							</a>
							<h5><a href="#">Admin</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>MARCH 21, 2013</li>
								<li><a href="singlepage.html">Reply</a></li>
							</ul>		
						</div>
						<div class="clearfix"> </div>
					</div> -->
				</div>		

				@include('common.error')

				

				<hr style="border: 1px dashed #ccc">

				<!--related-posts-->
				<div class="row related-posts">
					<h4>相关话题</h4>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="{{ URL::asset('images/img1.jpg') }}" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>	
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="{{ URL::asset('images/img2.jpg') }}" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="{{ URL::asset('images/img3.jpg') }}" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="{{ URL::asset('images/img4.jpg') }}" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>					
				</div>

				<!-- <div class="admin-text">
					<h5>作者：HH</h5>
					<div class="admin-text-left">
						<a href="#"><img src="{{ URL::asset('images/icon1.png') }}" alt=""/></a>
					</div>
					<div class="admin-text-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<span>View all posts by:<a href="#"> Admin </a></span>
					</div>
					<div class="clearfix"> </div>
				</div> -->

				<hr>
				
				<!-- <div class="coment-form">
					<h4>给我留言</h4>
					<form>
						<input type="text" value="用户 " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户';}" required="">
						<input type="email" value="邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '邮箱';}" required="">
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '你的建议...';}" required="">你的建议...</textarea>
						<input type="submit" value="提交意见" >
					</form>
				</div>		 -->
			</div>	

			@include('layouts._page_right', ['blogs' => $blog->with('user')->recentReplied()->paginate(2)])

		</div>	
	</div>
	<!--//single-page-->
	<script type="text/javascript">
	/*window.onload=function(){
	    var rb=document.getElementById('rb');
	    var rt=document.getElementById('rt');
	    rb.onclick=function(){
            if(rt.style.display=='block'){ 
                    rt.style.display='none'; 
                }
                else{
                    rt.style.display='block';
                }
        }
	};*/
	</script>
@stop
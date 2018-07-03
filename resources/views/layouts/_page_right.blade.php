<div class="col-md-4 single-page-right">
	<div class="panel panel-default created">
		<div class="panel-body">
			<a href="{{ route('blogs.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 新建帖子
			</a>
		</div>
	</div>

	<div class="author">
		<h1><span class="glyphicon glyphicon-star"></span> 本站作者</h1>
		<a href="{{ route('users.show', '1') }}"><img class="center-block author-img" src="{{ URL::asset('avatar/4.jpg') }}"></a>
		<hr>
		<h2 class="author-name"><a href="{{ route('users.show', '1') }}">HH</a></h2>
		<button class="center-block"><a href="{{ route('contact') }}" class="btn-a"><span class="glyphicon glyphicon-envelope"></span> 留言</a></button>
	</div>
	
	<div class="category">
		<h4>相关教程</h4>
		<div class="list-group">
			<a href="singlepage.html" class="list-group-item">Cras justo odio</a>
			<a href="singlepage.html" class="list-group-item">Dapibus ac facilisis in</a>
			<a href="singlepage.html" class="list-group-item">Morbi leo risus</a>
			<a href="singlepage.html" class="list-group-item">Porta ac consectetur ac</a>
			<a href="singlepage.html" class="list-group-item">Vestibulum at eros</a>
			<a href="singlepage.html" class="list-group-item">Cras justo odio</a>
			<a href="singlepage.html" class="list-group-item">Cras justo odio</a>
			<a href="singlepage.html" class="list-group-item">Cras justo odio</a>
		</div>
	</div>	
	<div class="recent-posts">
		<h4>最近动态</h4>
		@foreach ($blogs as $blog)
		<div class="recent-posts-info">
			<!-- <div class="posts-left sngl-img">
				<a href="singlepage.html"> <img src="{{ URL::asset('images/img16.jpg') }}" class="img-responsive zoom-img" alt=""/> </a>
			</div> -->
			<div class="posts-right">
				<lable><span>{{ $blog->user->name }}</span> · {{ $blog->created_at->diffForhumans() }} 发布了</lable>
				<h5><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->introduction }}</a></h5>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p> -->
				<a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary hvr-rectangle-in">阅 读</a>
			</div>
			<div class="clearfix"> </div>
		</div>	
		@endforeach
		<!-- <div class="recent-posts-info">
			<div class="posts-left sngl-img">
				<a href="singlepage.html"> <img src="{{ URL::asset('images/img17.jpg') }}" class="img-responsive zoom-img" alt=""/></a>
			</div>
			<div class="posts-right">
				<lable>MARCH 1, 2015</lable>
				<h5><a href="singlepage.html">FINIBUS BONORUM MALORUM </a></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
				<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
			</div>
			<div class="clearfix"> </div>
		</div> -->
		<div class="clearfix"> </div>
	</div>
	<div class="comments">
		<h4>近期评论</h4>
		<div class="comments-info">
			<div class="cmnt-icon-left">
				<a href="singlepage.html"><img src="{{ URL::asset('images/icon1.png') }}" alt=""/></a>
			</div>
			<div class="cmnt-icon-right">
				<p>MARCH 1, 2015</p>
				<p><a href="singlepage.html">Admin</a></p>
			</div>
			<div class="clearfix"> </div>
			<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="comments-info cmnts-mddl">
			<div class="cmnt-icon-left">
				<a href="singlepage.html"><img src="{{ URL::asset('images/icon1.png') }}" alt=""/></a>
			</div>
			<div class="cmnt-icon-right">
				<p>MARCH 1, 2015</p>
				<p><a href="singlepage.html">Admin</a></p>
			</div>
			<div class="clearfix"> </div>
			<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="comments-info">
			<div class="cmnt-icon-left">
				<a href="singlepage.html"><img src="{{ URL::asset('images/icon1.png') }}" alt=""/></a>
			</div>
			<div class="cmnt-icon-right">
				<p>MARCH 1, 2015</p>
				<p><a href="singlepage.html">Admin</a></p>
			</div>
			<div class="clearfix"> </div>
			<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
</div>
<div class="clearfix"> </div>
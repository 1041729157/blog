@extends('layouts.default')

@section('nav')
	<li><a href="{{ route('index') }}">首页</a></li>
	<li><a href="{{ route('tour') }}">旅行</a></li>
	<li><a href="{{ route('gallery') }}">画廊</a></li>
	<li><a href="{{ route('testimonial') }}">推荐信</a></li>
	<li><a href="{{ route('blog') }}">博客</a></li>
	<li><a href="{{ route('contact') }}">联系我们</a></li>
@stop

@section('content')
	<!--single-page-->
	<div class="single-page">
		<div class="container">
			<div class="work-title sngl-title">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Single-page</li>
				</ol>
			</div>
			<div class="col-md-8 single-page-left">
				<div class="single-page-info">
					<img src="images/img22.jpg" alt=""/>
					<h5>CONDIMENTUM FRINGILLA, FRINGILLA CONDIMENTUM,FINIBUS BONORUM MALORUM, DONEC UT QUAM LIGULA, SED NISI LOBORTIS.</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
						Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, 
						consectetur adipisicing elit.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>  
					<h5>TINCIDUNT NEC, PRETIUM MALESUADA, AUCTOR LIBERO RUTRUM,</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> 
					<div class="comment-icons">
						<ul>
							<li><span></span><a href="#">Lorem ipsum dolor sit consectetur</a> </li>
							<li><span class="clndr"></span>MARCH 1, 2013</li>
							<li><span class="admin"></span> <a href="#">Admin</a></li>
							<li><span class="cmnts"></span> <a href="#">5 comments</a></li>
							<li><a href="#" class="like">15</a></li>
						</ul>
					</div>
				</div>	
				<div class="admin-text">
					<h5>Written By Admin</h5>
					<div class="admin-text-left">
						<a href="#"><img src="images/icon1.png" alt=""/></a>
					</div>
					<div class="admin-text-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<span>View all posts by:<a href="#"> Admin </a></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--related-posts-->
				<div class="row related-posts">
					<h4>Related Posts</h4>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="images/img1.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>	
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="images/img2.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="images/img3.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="images/img4.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>					
				</div>
				<!--//related-posts-->
				<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/icon1.png" alt=""/>
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
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/icon1.png" alt=""/>
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
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/icon1.png" alt=""/>
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
					</div>
				</div>	
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form>
						<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment" >
					</form>
				</div>		
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category">
					<h4>Categories</h4>
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
					<h4>Recent posts</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="singlepage.html"> <img src="images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<lable>MARCH 5, 2015</lable>
							<h5><a href="singlepage.html">FINIBUS BONORUM MALORUM </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="singlepage.html"> <img src="images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="posts-right">
							<lable>MARCH 1, 2015</lable>
							<h5><a href="singlepage.html">FINIBUS BONORUM MALORUM </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments">
					<h4>Recent comments</h4>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="singlepage.html"><img src="images/icon1.png" alt=""/></a>
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
							<a href="singlepage.html"><img src="images/icon1.png" alt=""/></a>
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
							<a href="singlepage.html"><img src="images/icon1.png" alt=""/></a>
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
		</div>	
	</div>
	<!--//single-page-->
@stop
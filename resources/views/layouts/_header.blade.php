<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						@yield('nav')
					</ul>	
					<!-- <div class="social-icons">
						<ul>
							<li><a href="#"></a></li>
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="gg"></a></li>
						</ul>	
					</div> -->
					<ul class="nav navbar-nav navbar-right">
						@guest
							<li><a href="{{ route('login') }}">登陆</a></li>
							<li><a href="{{ route('register') }}">注册</a></li>
						@else 
							<li>
								<a href="{{ route('blogs.create') }}">
									<span class="glyphicon glyphicon-plus" aria-hidden="true" title="新建帖子"></span>
								</a>
							</li>

							<li>
								<a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
									<span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }}" title="消息提醒">
										{{ Auth::user()->notification_count }}
									</span>
								</a>
							</li>

							<li class="dropdown">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
		                            	@if (Auth::user()->avatar)
		                            		<img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
		                            	@else
		                                	<img src="{{ URL::asset('images/lx.jpeg') }}" class="img-responsive img-circle" width="30px" height="30px">
										@endif
		                            </span>
		                            {{ Auth::user()->name }} <span class="caret"></span>
		                        </a>

		                        <ul class="dropdown-menu" role="menu">
									
									@can('manage_contents')
		                        	<li>
		                        		<a href="{{ url(config('administrator.uri')) }}">
		                        			<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
		                        			管理后台
		                        		</a>
		                        	</li>
		                        	@endcan

		                        	<li>
		                        		<a href="{{ route('users.show', Auth::id()) }}">
		                        			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 个人中心
		                        		</a>
		                        	</li>
	
									<li>
										<a href="{{ route('users.edit', Auth::id()) }}">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 编辑资料
										</a>
									</li>

									<li>
										<a href="{{ route('users.edit_password', Auth::id()) }}">
											<span class="glyphicon glyphicon-lock"></span>
											修改密码
										</a>
									</li>

		                            <li>
		                                <a href="{{ route('logout') }}"
		                                    onclick="event.preventDefault();
		                                             document.getElementById('logout-form').submit();">
		                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 退出登录
		                                </a>

		                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                                    {{ csrf_field() }}
		                                </form>
		                            </li>
		                        </ul>
		                    </li>
						@endguest
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>	
		</nav>		
	</div>	
	<!--navigation-->
	<!--header-->
	<div class="header">
		<div class="container">
			<!-- <div class="navbar-header">
				<a class="navbar-brand" href="{{ route('details') }}"><img src="{{ URL::asset('images/logo.png') }}" alt=""></a>
			</div>	 -->
			<!-- <form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</form>	 -->
			@yield('search')
		</div>	
	</div>
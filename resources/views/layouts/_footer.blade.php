<div class="footer">
	<div class="container">
		<div class="col-md-4 about">
			<h3>About Us</h3>	
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-md-4 posts">
			<h3>Popular Posts</h3>
			<div class="media">
				<div class="media-left">
					<a href="singlepage.html">
					  <img class="media-object thumbnail" src="{{ URL::asset('images/img11.jpg') }}" alt="">
					</a>
			    </div>
				<div class="media-body">
					<h4 class="media-heading"><a href="singlepage.html">Lorest Nesto</a></h4>
					<h5>April 17, 2015</h5>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="singlepage.html">
					  <img class="media-object thumbnail" src="{{ URL::asset('images/img10.jpg') }}" alt="">
					</a>
			    </div>
				<div class="media-body">
					<h4 class="media-heading"><a href="singlepage.html">Lorest Nesto</a></h4>
					<h5>April 17, 2015</h5>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="singlepage.html">
					  <img class="media-object thumbnail" src="{{ URL::asset('images/img11.jpg') }}" alt="">
					</a>
			    </div>
				<div class="media-body">
					<h4 class="media-heading"><a href="singlepage.html">Lorest Nesto</a></h4>
					<h5>April 17, 2015</h5>
				</div>
			</div>
		</div>
		<div class="col-md-4 address">
			<h3>Our address</h3>
			<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
				luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta </p>
			<ul>
				<li><span></span>Moonshine St. 14/05 Light, Jupiter</li>
				<li><span class="ph-no"></span>+00 (123) 456 78 90</li>
				<li><span class="mail"></span><a href="mailto:{{ setting('contact_email') }}">联系我们</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="copy-right">
	<div class="container">
		<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
	</div>
</div>
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
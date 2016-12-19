<style>
	#badge {
		position: absolute;
		right: 1.5em;
		top: 1em;
	}
</style>

<div class="friends-outer" ng-if="friendList.length">
	<div class="container">
		<!-- Title start -->
		<div class="row white-title">
			<h1>Friends</h1>
		</div>
		<!-- Title End -->
		
		<!-- Slider -->
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
	
							{{-- <pre>@{{ friendList | json }}</pre> --}}

							<div class="col-md-2 col-xs-4" ng-repeat="friend in friendList">
								<div class="friend-image text-center">
									<div class="friend-img" ng-class="(friend.isOnline == true) ? 'onlineuser' : 'offlineuser'">
										<img ng-src="{{ asset('images') }}/@{{ friend.UserPic }}" class="img-circle" alt="avatar" width="100" height="100" />
									</div>
									<h3>@{{ friend.Name }}</h3>
									
									<div class="friend-hover-info">
										<div class="friend-hover-box">
											<h4>@{{ friend.Name }} <img id="badge" src="images/level.png" /></h4>
											<p>@{{ friend.Country }}</p>
											<p>@{{ friend.Title }}</p>
											<p>@{{ friend.Company }}</p>
											<p>Venue: <a href="#">Lorem Ipsum</a></p>
										</div>
										<div class="friend-info-btn">
											<a href="#"><img src="images/accept.png" class="fib_accept" /></a>
											<a><img src="images/handsake.png" class="fib_handsake" /></a>
											<a href="#"><img src="images/message.png" class="fib_message" /></a>
											<a href="#"><img src="images/voice.png" class="fib_voice" /></a>
											<a href="#"><img src="images/video.png" class="fib_video" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="left-right-control">
					<a href="#myCarousel" role="button" data-slide="prev"><img src="images/left-arrow.png" alt="Previous" /></a>
					
					<a href="#myCarousel" role="button" data-slide="next"><img src="images/right-arrow.png" alt="Next" /></a>
				</div>
			</div>
		</div>
		<!-- Slider -->

	</div>
</div>

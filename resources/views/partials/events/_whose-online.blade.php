<style type="text/css">
	.friend-hover-box { position: relative; }

	#badge {
		position: absolute;
		right: 1.5em;
		top: 1em;
	}
</style>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
	<div class="item active">
		<div class="row">
	
			{{-- <pre>@{{ whoseOnline | json}}</pre> --}}

			<div class="col-md-2 col-xs-4" ng-repeat="online in whoseOnline">
				<div class="friend-image text-center">
					<div class="friend-img">
						<img ng-src="{{ asset('images') }}/@{{ online.UserPic }}" height="100" width="100" class="img-circle" alt="avatar" />
					</div>
					<h3>@{{ online.Name }}</h3>

					<div class="friend-hover-info">
						<div class="friend-hover-box">
							<h4>@{{ online.Name }} <img src="{{ asset('images/level.png') }}" id="badge" /></h4>
							<p>@{{ online.Country }}</p>
							<p>@{{ online.Title }}</p>
							<p>@{{ online.Company }}</p>
							<p>Now At: <a href="#">@{{ online.SessionName }}</a></p>
						</div>
						<div class="friend-info-btn">
							<a ng-show="inviteIcon" ng-click="sendInvitation(online)">
								<img src="{{ asset('images/hmsg.png') }}" />
							</a>

							<a ng-click="sendFriendRequest(online)" ng-hide="sendRequest = (online.IDConnectionStatus == 2) ? true : false">
								<img src="{{ asset('images/hadd.png') }}"/>
							</a>
							<a ng-show="sendRequest">
								<img src="{{ asset('images/hhandshake.png') }}"/>
							</a>

							<a href=""><img src="{{ asset('images/hmessage.png') }}" /></a>
							<a href="#" ng-show="micIcon"><img src="{{ asset('images/hvoice.png') }}" /></a>
							<a href="#" ng-show="cameraIcon"><img src="{{ asset('images/hvideo.png') }}" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


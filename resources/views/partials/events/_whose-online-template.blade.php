<style>
	.carousel-inner { height: 500px; }
</style>

<!-- Wrapper for slides -->
<div class="carousel-inner" id="onlineDiv" role="listbox">
		
	<script id="online-template" type="text/x-handlebars-template">
		<div class="item active" id="onlineRow">
			<div class="row">
				@{{#each this}}
					<div class="col-md-2 col-xs-4">
						<div class="friend-image text-center">
							<div class="friend-img">
								<img src="{{ asset('images') }}/@{{ UserPic }}" height="100" width="100" class="img-circle" alt="avatar" />
							</div>
							<h3>@{{ Name }}</h3>

							<div class="friend-hover-info" data-user-two="@{{ id }}" data-user-one="{{ Auth::user()->id }}">
								<div class="friend-hover-box">
									{{-- <img src="images/country.png" class="country-img" /> --}}
									<h4>@{{ Name }} <img src="{{ asset('images/level.png') }}" /></h4>
									<p>@{{ Country }}</p>
									<p>@{{ Title }}</p>
									<p>@{{ Company }}</p>
									<p>Venue: <a href="#">Lorem Ipsum</a></p>
								</div>
								<div class="friend-info-btn">
									<a href="#"><img src="{{ asset('images/accept.png') }}" /></a>
									<a href="#"><img src="{{ asset('images/handsake.png') }}"/></a>
									<a href="#"><img src="{{ asset('images/message.png') }}" /></a>
									<a href="#"><img src="{{ asset('images/voice.png') }}" /></a>
									<a href="#"><img src="{{ asset('images/video.png') }}" /></a>
								</div>
							</div>
						</div>
					</div>
				@{{/each}}
			</div>
		</div>
	</script>

	
</div>


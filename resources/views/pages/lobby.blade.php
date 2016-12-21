@extends('layouts.app')

@section ('title')
	<title>Brunch - Lobby</title>
@endsection

@section ('top')
	@include ('errors._modal-errors')
@endsection

@section ('content')
	<style type="text/css">
		.home-header { height: 100vh; }
		nav + div.container div.row {
		    margin-top: 14.5em;
		}
	</style>

	<!-- Header start -->
    <header class="home-header">
		@include ('partials/pages._menu')
		
		<div class="container">
			<div class="row">
				<div class="header-tagline">
					<h1>RELAX... </h1>
					<h2>You're at the Lobby</h2>
				</div>
			</div>
		</div>
		
		<div class="down-arrow"><span class="glyphicon glyphicon-menu-down"></span></div>
    </header>
	<!-- Header start -->
	
<div ng-controller="EventController">
	@include ('partials.events._delete-popup')
	@include ('partials.events._goto-event-page-notification')

	<!-- Next Events start -->
	<div class="next-events scrolling">
		<div class="container">
			<!-- Evets Title -->
			<div class="row title-center">
				<h1>Next Events</h1>
			</div>
			<!-- Evets Title End -->
			
			<!-- Create Your Event Button start -->
			<div class="row rightalign">
				<a href="#" class="btn btn-blue" data-toggle="modal" data-target="#myModal" ng-click="createYourEventModal()">Create Your Event</a>
			</div>
			<!-- Create Your Event Button End -->
			
			<section id="nextEvents">
				{{-- Next Events --}}
				@include ('partials.events._next')
			</section>
			
			<!-- Event List End -->
			
			<!-- Pagination start -->
			<div class="row text-center">
				{!! $events->links() !!}
			</div>
			<!-- Pagination End -->

			<div id="loading" class="row text-center hidden">
				<span id="loading">Loading.....</span>
			</div>
		</div>
	</div>
	<!-- Next Events End -->

	{{-- My Events --}}
	@include ('partials.events._mine')

	{{-- popup - create event --}}
	@include ('partials.events._create-event')
</div>	

<div ng-controller="OnlineController">
	{{-- Friends --}}
	@include ('partials.events._friends')
	@include ('partials.events._friend-request-popup-template')
	@include ('partials.events._send-notification')
	@include ('partials.events._invite-popup')
	@include ('partials.events._invite-notification')
	
	<!-- Invite Friends start -->
	<div class="invite-friend">
		<div class="container">
			<!-- Title -->
			<div class="row title-center">
				<h1>INVITE YOUR FRIENDS TO JOIN THE MEETINGS</h1>
			</div>
			<!-- Title End -->
			
			<!-- Form start -->
			<div class="row">
				<div class="col-md-12">
					<form role="form" class="invite-form">
						<div class="form-group">
							<label>Type email addresses below</label>
							<textarea class="form-control"></textarea>
						</div>
						
						<div class="form-group">
							<input type="submit" value="Send Invitation" class="btn btn-blue"></input>
						</div>
					</form>
					
					<p class="note">Multiple email addresses should be comma seperated.</p>
				</div>
			</div>
			<!-- Form End -->
			
			<!-- Social icon start -->
			<div class="row">
				<div class="col-md-1  col-xs-6">
					<div class="gmail-icon">
						<a href="#"><img src="images/gmail.png" alt="Gmail" /></a>
					</div>
				</div>
				
				<div class="col-md-1  col-xs-6">
					<div class="fb-icon">
						<a href="#"><img src="images/fb.png" class="Facebook"></a>
					</div>
				</div>
			</div>
			<!-- Social icon End -->
		</div>
	</div>
	<!-- Invite Friends End -->
	
	<!-- Who is online start -->
	<div class="who-online">
		<div class="container">
			<!-- Title -->
			<div class="row title-center">
				<h1>WHOS ONLINE</h1>
			</div>
			<!-- Title End -->
			
			<!-- Slider -->
			<div class="row">
				<div id="inviteFriendCarousel" class="carousel slide" data-ride="carousel">
					@include ('partials.events._whose-online')

					<div class="left-right-control">
						<a class="leftfriendcar" href="#inviteFriendCarousel" role="button" data-slide="prev"><img src="images/left-arrow-blue.png" alt="Previous" /></a>
						
						<a class="nextfriendcar" href="#inviteFriendCarousel" role="button" data-slide="next"><img src="images/right-arrow-blue.png" alt="Next" /></a>
					</div>
				</div>
			</div>
			<!-- Slider -->
			
		</div>
	</div>
	<!-- Who is online End -->
</div>
@endsection

@section ('footer')
	<script src="{{ asset('js/controllers/OnlineController.js') }}"></script>
	<script src="{{ asset('js/controllers/ActionUserController.js') }}"></script>
	<script src="{{ asset('js/controllers/EventController.js') }}"></script>
	<script>
		$(document).ready(function () {
			
			/*Fix header*/
			window.addEventListener('scroll', function(e){
				var distanceY = window.pageYOffset || document.documentElement.scrollTop,
					shrinkOn = 300,
					header = $("nav.navbar");
				if (distanceY > shrinkOn) {
					header.addClass("scroll_header");
				} else {
					if (header.hasClass("scroll_header")) {
						header.removeClass("scroll_header");
					}
				}
			});
			/*End Fix header*/
			
			/*Popup rooms*/
			$("#room-images").owlCarousel({
				items:2,
				navigation : false,
				pagination: true
			});
			$("#room-images .slide-item img").click(function(){
				$("#room-images .slide-item img").removeClass("selected_roomborder");
				$(this).addClass("selected_roomborder");
			});
			/*End Popup rooms*/
			
			/*Place images*/
			$("#places-images").owlCarousel({
				items:2,
				navigation : false,
				pagination: true
			});
			
			$("#places-images .slide-content-item").click(function(){
				$("#places-images .slide-content-item img").removeClass("selected_placeborder");
				$(this).find('img').addClass("selected_placeborder");
			});
			/*End Place images*/
			
			$('.selecttimezone').selectpicker({
			  style: 'btn-info',
			  size: 4
			});
			
			/*Scroll page*/
			$(".down-arrow").on('click', function(event) {
				event.preventDefault();
				$('html, body').animate({
				  scrollTop: $('.scrolling').offset().top
				}, 800, function(){
				});
			});
			/*/Scroll page*/
			
		});
    </script>
	
	<script>
		$('#myCarousel').carousel({
			interval: false
		});
		
		$('#inviteFriendCarousel').carousel({
			pause: true,
			interval: false
		});
		
		$(".leftfriendcar").click(function() {
			$("#inviteFriendCarousel").carousel("prev");
		});
		
		$(".nextfriendcar").click(function(){
			$("#inviteFriendCarousel").carousel("next");
		});	
	</script>
	<script>
		(function() {
		'use strict';
		
		// scroll down
		var top = $('div.next-events').offset().top;
		$('div.down-arrow').on('click',function() {
			$('html, body').animate({ scrollTop: top });
		});
		
		})();

	</script>

	<script>
		(function() {
		'use strict';

		var layoutDiv = $('div#owl-demo'),
			placeDiv = $('div#owl-content');

		layoutDiv.on('click', 'img', function() {
			layoutDiv.find('img').removeAttr('style');
			$(this).css({ border: '5px solid gold' });
		});

		placeDiv.on('click', 'div.slide-title', function() {
			placeDiv.find('div.slide-title').removeAttr('style');
			$(this).css({ border: '5px solid gold' });
		});

		})();
	</script>
	<script src="{{ asset('js/event.js') }}"></script>
	{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
	{{-- <script src="{{ asset('js/online.js') }}"></script> --}}
@endsection

@extends('layouts.app')

@section ('title')
	<title>Brunch - Lobby</title>
@endsection

@section ('top')
	@include ('partials.events._delete-popup')
@endsection

@section ('content')
	<style type="text/css">
		header { height: 100vh; }
		nav + div.container div.row {
		    margin-top: 14.5em;
		}
	</style>

	<!-- Header start -->
    <header class="home-header">
		<!-- Navigation start -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand Logo start -->
				<a href="" class="navbar-brand"><img src="images/logo.png"></a>
				<!-- Brand Logo End -->
				
				
				<div class="navbar-header" onclick="openNav()">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				
				<div id="myNav" class="overlay">
					<div class="menu-logo">
						<a href="index.html"><img src="images/logo.png" /></a>
					</div>
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					
					@include ('partials/pages._menu')
				</div>
				
				<!-- 
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>-->
						
					<!--End Nav-->
			</div>
		</nav>
		<!-- Navigation End -->
		
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


	{{-- Next Events start --}}
	<div class="next-events">
		<div class="container">
			<!-- Evets Title -->
			<div class="row title-center">
				<h1>Next Events</h1>
			</div>
			<!-- Evets Title End -->
			
			<!-- Create Your Event Button start -->
			<div class="row rightalign">
				<a href="#" class="btn btn-blue" id="createEvent" data-toggle="modal" data-target="#myModal">Create Your Event</a>
			</div>
			<!-- Create Your Event Button End -->
			
			<section id="nextEvents">
				{{-- Next Events --}}
				@include ('partials.events._next')
			</section>
		</div>
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
	<!-- Next Events End -->

	{{-- My Events --}}
	@include ('partials.events._mine')
	
	<!-- Friends list start -->
	<div class="friends-outer">
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
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
										
										<div class="friend-hover-info">
											<div class="friend-hover-box">
												<img src="images/country.png" class="country-img" />
												<h4>John Smith <img src="images/level.png" /></h4>
												<p>Sales Director</p>
												<p>Lorem Ipsum Company</p>
												<p>Venue: <a href="#">Lorem Ipsum</a></p>
											</div>
											<div class="friend-info-btn">
												<a href="#"><img src="images/accept.png" /></a>
												<a href="#"><img src="images/handsake.png" /></a>
												<a href="#"><img src="images/message.png" /></a>
												<a href="#"><img src="images/voice.png" /></a>
												<a href="#"><img src="images/video.png" /></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="item">
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img onlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img offlineuser">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
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
	<!-- Friends list End -->
	
	<!-- Invite Friends start -->
	<div class="invite-friend">
		<div class="container">
			<!-- Title -->
			<div class="row title-center">
				<h1>Invite your friends to join the meetings</h1>
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
							<input type="submit" value="Send Invitation" class="btn btn-blue"></textarea>
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
				<h1>Invite your friends to join the meetings</h1>
			</div>
			<!-- Title End -->
			
			<!-- Slider -->
			<div class="row">
				<div id="inviteFriendCarousel" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							</div>
							
						</div>

						<div class="item">
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
								
								<div class="col-md-2 col-xs-4">
									<div class="friend-image text-center">
										<div class="friend-img">
											<img src="images/online-user.jpg" class="img-circle" alt="avtar" />
										</div>
										<h3>John Smith</h3>
									</div>
								</div>
							</div>
						</div>

					</div>
					
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
	
	{{-- popup - create event --}}
	@include ('partials.events._create-event')
@endsection

@section ('footer')
	<script src="{{ asset('js/vendor/handlebars.min.js') }}"></script>
	<script src="{{ asset('js/event.js') }}"></script>
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
@endsection

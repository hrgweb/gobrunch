@extends('layouts.app')

@section ('title')
	<title>Brunch - Events</title>
@endsection

@section ('head')
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="scrollbar/jquery.mCustomScrollbar.css" />
	<!-- Custom Scrollbar End -->
@endsection

@section ('content')
	<!-- Header start -->
    <header class="eve-header">
		<!-- Navigation start -->
		<nav class="navbar navbar-default event-navbar">
			<div class="container">
				<!-- Brand Logo start -->
				<a href="{{ url('/') }}" class="navbar-brand col-md-3"><img src="images/event-logo.png"></a>
				<!-- Brand Logo End -->
				
				<div class="col-md-6 user-info-header">
					<img src="images/user-pics.jpg" />
					<span>LOREM IPSUM DOLOR SIT AMET</span>
				</div>
				
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
				
				<!--End Nav-->
			</div>
		</nav>
		<!-- Navigation End -->
		
		<div class="video-header">
			<img src="images/video-img.jpg" />
		</div>
	
    </header>
	<!-- Header start -->
	
	<!-- Event Header start -->
	<div class="event_header_wrapper">
		<div class="event_header">
			<!-- Event Button start -->
			<div class="event-button">
				<a href="#"><img src="images/voice.png" /></a>
				<a href="#"><img src="images/video.png" /></a>
				<a href="#"><img src="images/download.png" /></a>
			</div>
			<!-- Event Button End -->
			
			<!-- Event link start -->
			<div class="event-link">
				<ul>
					<li><a href="#">Lorem ipsum dolor...</a></li>
					<li><a href="#">Lorem ipsum dolor...</a></li>
					<li><a href="#">Lorem ipsum dolor...</a></li>
					<li><a href="#">Lorem ipsum dolor...</a></li>
					<li><a href="#">Lorem ipsum dolor...</a></li>
					<a href="#" class="btn-more-event">More...</a>
				</ul>
				
			</div>
			<!-- Event link End -->
		</div>
	</div>
	<!-- Event Header End -->
	
	<!-- Comment list start -->
	<div class="comment_page_wrapper">
		<div class="container">
			<div class=" col-md-12 commentbox mCustomScrollbar">
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="row com-box">
					<div class="col-md-1">
						<img src="images/user-pics.jpg" />
					</div>
					
					<div class="col-md-11">
						<h2>John Smith</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
			</div>
			
			<div class="col-md-12">
				<form class="comment-box-form">
					<input type="text" class="com-txt" />
					
					<div class="com-box-btn">
						<a href="#"><img src="images/com-link.png" /></a>
						<a href="#"><img src="images/com-emoji.png" /></a>
						<input type="submit" class="com-btn" value="Send" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Comment list End -->
	
	<!-- Meating area start -->
	<div class="meating-area">
		<img src="images/meating-img.jpg" />
	</div>
	<!-- Meating area End -->
	
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
	
	<script>
		$(document).ready(function () {
			$( "#datepicker" ).datepicker({ beforeShow: function(input, obj) {
				$('#display_cal').html($(input).datepicker('widget'));
					obj.dpDiv.css({position:'relative',top:'',left:'',});
			}
			});
			$("#owl-demo").owlCarousel({
				items:2,
				navigation : false,
				pagination: true
			});
			
			$("#owl-content").owlCarousel({
				items:2,
				navigation : false,
				pagination: true
			});
			
			$('.selecttimezone').selectpicker({
			  style: 'btn-info',
			  size: 4
			});
		});
    </script>
@endsection

@section ('footer')
	<!-- custom scrollbar plugin -->
	<script src="scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	
	<script>
		(function($){
			$(window).on("load",function(){
				$(".content").mCustomScrollbar({
					theme:"minimal"
				});
				
				$(".chatmessage").mCustomScrollbar({
					theme:"minimal"
				});
			});
		})(jQuery);
	</script>

@endsection

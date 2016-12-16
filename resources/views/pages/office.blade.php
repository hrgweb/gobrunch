@extends('layouts.app')

@section ('title')
	<title>Brunch - My Office</title>
@endsection

@section ('head')
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="{{ asset('scrollbar/jquery.mCustomScrollbar.css') }}" />
	<!-- Custom Scrollbar End -->
@endsection

@section ('content')
	<!-- Header start -->
    <header class="office-header" style="height: 600px;">
		<!-- Navigation start -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand Logo start -->
				<a href="" class="navbar-brand"><img src="images/logo.png"></a>
				<!-- Brand Logo End -->
				
				<div class="navbar-header">
					<button type="button" onclick="openNav()" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
		
		<div class="container">
			<div class="row">
				<div class="header-tagline">
					<h1>This Is Your Office</h1>
					<h2>Enjoy Your Privacy</h2>
				</div>
			</div>
		</div>
    </header>
	<!-- Header start -->
	
	<!-- Message Wrapper start -->
	<div class="message-wrapper">
		<div class="container">
			<!-- Message Title -->
			<div class="row title-center">
				<h1>Messages</h1>
			</div>
			<!-- Message Title End -->
			
			<!-- Message box start -->
			<div class="message-chat-box">
				<div class="col-md-3 message-user-list">
					<!-- Message user Search start -->
					<div class="msg-user-search">
						<div class="col-md-10">
							<form role="form">
								<div class="form-group">
									<input type="text" placeholder="Search" class="form-control msg-user-txt" />
								</div>
							</form>
						</div>
						
						<div class="col-md-2 text-right">
							<a href="#" class="msg-create"><img src="images/msg-create.png" /></a>
						</div>
					</div>
					<!-- Message user Search End -->
					
					<!-- Message User List -->
					<div class="msg-user-list">
						<div class="content mCustomScrollbar">
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="online">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet <span>2</span></p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="online">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="online">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="offline">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="offline">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="offline">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="busy">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="busy">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="busy">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
							<div class="msg-user-info">
								<a href="#">
									<div class="msg-user-image">
										<img src="images/user-pics.jpg" />
									</div>
									
									<div class="msg-user-desc">
										<h2><strong class="busy">John Smith</strong> <span>11:24AM</span></h2>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
								</a>
							</div>
							
						</div>
					</div>
					<!-- Message User End -->
				</div>
				
				<!-- Message Chat start -->
				<div class="col-md-7 message-chat-list">
						<!-- Chating messgae start -->
						<div class="msg-chat-list">
							<h2>To : John Smith</h2>
							<div class="msg-chat-list-entry mCustomScrollbar chatmessage">
								<!-- Single chat row -->
								<div class="msg-text msg-to">
									<div class="msg-text-image">
										<img src="images/user-1.png" />
									</div>
									
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular </p>
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-me">
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular est adscipling quis ipsum edt</p>
									</div>
									
									<div class="msg-text-image">
										<img src="images/user-2.png" />
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-to">
									<div class="msg-text-image">
										<img src="images/user-1.png" />
									</div>
									
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet </p>
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-me">
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular est adscipling quis </p>
									</div>
									
									<div class="msg-text-image">
										<img src="images/user-2.png" />
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-to">
									<div class="msg-text-image">
										<img src="images/user-1.png" />
									</div>
									
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular </p>
									</div>
								</div>
								<!-- Single chat row End -->
								
								<div class="msg-text msg-me">
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular est adscipling quis </p>
									</div>
									
									<div class="msg-text-image">
										<img src="images/user-2.png" />
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-to">
									<div class="msg-text-image">
										<img src="images/user-1.png" />
									</div>
									
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular </p>
									</div>
								</div>
								<!-- Single chat row End -->
								
								<div class="msg-text msg-me">
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular est adscipling quis </p>
									</div>
									
									<div class="msg-text-image">
										<img src="images/user-2.png" />
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-to">
									<div class="msg-text-image">
										<img src="images/user-1.png" />
									</div>
									
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular </p>
									</div>
								</div>
								<!-- Single chat row End -->
								
								<div class="msg-text msg-me">
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular est adscipling quis </p>
									</div>
									
									<div class="msg-text-image">
										<img src="images/user-2.png" />
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-to">
									<div class="msg-text-image">
										<img src="images/user-1.png" />
									</div>
									
									<div class="msg-text-desc">
										<p>Lorem ipsum dolor sit amet consecteular </p>
									</div>
								</div>
								<!-- Single chat row End -->
								
								<!-- Single chat row -->
								<div class="msg-text msg-me">
									<div class="msg-text-desc chat-typing">
										<img src="images/typing.png" />
									</div>
									
									<div class="msg-text-image">
										<img src="images/user-2.png" />
									</div>
								</div>
								<!-- Single chat row End -->
							</div>
						</div>
						<!-- Chating messgae End -->
						
						<!-- Chating Form start -->
						<div class="msg-chat-form">
							<form rel="" class="msg-form">
								<input type="text" placeholder="Type Something" class="msg-txt" />
								<div class="form-object">
									<a href="#"><img src="images/link.png" /></a>
									<a href="#"><img src="images/emoji.png" /></a>
									<input type="submit" value="Send" class="msg-btn" />
								</div>
							</form>
						</div>
						<!-- Chating Form End -->
				</div>
				<!-- Message Chat End -->
				
				<div class="col-md-2 message-user-profile">
					<div class="msg-user-profile">
						<img src="images/userprofile.png" />
						<h2>John Smity <img src="images/level.png" /></h2>
						<p>Sales Director <br />Lorem ipsum Company</p>
						<h3>USA <img src="images/country.png" /></h3>
					</div>
				</div>
			</div>
			<!-- Message box End -->
			
		</div>
	</div>
	<!-- Message Wrapper End -->
	
	<!-- Next Events start -->
	<div class="myagenda">
		<div class="container">
			<!-- Evets Title -->
			<div class="row title-center">
				<h1>My Agenda</h1>
			</div>
			<!-- Evets Title End -->
			
			<!-- Event List start -->
			<div class="row event-list">
				<div class="col-md-5">
					<div class="event-header">
						<h2>The 50-Minute Business Breakthrough</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				
				<div class="col-md-1">
					<img src="images/user.png" class="img-circle" alt="" />
				</div>
				
				<div class="col-md-2">
					<div class="date-month">
						<p>03<span>September</span></p>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="time-gmt">
						<p>05:30<span>GMT - 5</span></p>
					</div>
				</div>
				
				<div class="col-md-2">
					<a href="#" class="btn btn-blue btn-justify">Unregister</a>
				</div>
				
			</div>
			
			<div class="row event-list">
				<div class="col-md-5">
					<div class="event-header">
						<h2>The 50-Minute Business Breakthrough</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				
				<div class="col-md-1">
					<img src="images/user.png" class="img-circle" alt="" />
				</div>
				
				<div class="col-md-2">
					<div class="date-month">
						<p>03<span>September</span></p>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="time-gmt">
						<p>05:30<span>GMT - 5</span></p>
					</div>
				</div>
				
				<div class="col-md-2">
					<a href="#" class="btn btn-blue btn-justify">Unregister</a>
				</div>
				
			</div>
			
			<div class="row event-list">
				<div class="col-md-5">
					<div class="event-header">
						<h2>The 50-Minute Business Breakthrough</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				
				<div class="col-md-1">
					<img src="images/user.png" class="img-circle" alt="" />
				</div>
				
				<div class="col-md-2">
					<div class="date-month">
						<p>03<span>September</span></p>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="time-gmt">
						<p>05:30<span>GMT - 5</span></p>
					</div>
				</div>
				
				<div class="col-md-2">
					<a href="#" class="btn btn-blue btn-justify">Unregister</a>
				</div>
				
			</div>
			<!-- Event List End -->
			
		</div>
	</div>
	<!-- Next Events End -->
	
	<!-- My Evetns Start -->
	<div class="myoffice-events">
		<div class="container">
			<!-- Evets Title -->
			<div class="row title-center">
				<h1>My Events</h1>
			</div>
			<!-- Evets Title End -->
			
			<!-- My Event List Start -->
			<div class="row event-list">
				<div class="col-md-5">
					<div class="event-header">
						<h2>The 50-Minute Business Breakthrough</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				
				<div class="col-md-1">
					<img src="images/user.png" class="img-circle" alt="" />
				</div>
				
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4">
							<div class="date-month">
								<p>03<span>September</span></p>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="time-gmt">
								<p>05:30<span>GMT - 5</span></p>
							</div>
						</div>
						
						<div class="col-md-1">
							<a href="#"><span class="glyphicon btn-delete glyphicon-trash"></span></a>
						</div>
						
						<div class="col-md-3">
							<a href="#" class="btn btn-blue btn-justify">Edit</a>
						</div>
				
					</div>
				</div>
			</div>
			
			<div class="row event-list">
				<div class="col-md-5">
					<div class="event-header">
						<h2>The 50-Minute Business Breakthrough</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				
				<div class="col-md-1">
					<img src="images/user.png" class="img-circle" alt="" />
				</div>
				
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4">
							<div class="date-month">
								<p>03<span>September</span></p>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="time-gmt">
								<p>05:30<span>GMT - 5</span></p>
							</div>
						</div>
						
						<div class="col-md-1">
							<a href="#"><span class="glyphicon btn-delete glyphicon-trash"></span></a>
						</div>
						
						<div class="col-md-3">
							<a href="#" class="btn btn-blue btn-justify">Edit</a>
						</div>
				
					</div>
				</div>
			</div>
			
			<!-- My Event List End -->
			
		</div>
	</div>
	<!-- My Evetns End -->
	
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
	
	<!-- Popup start -->
	<!-- Button trigger modal -->
	
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form role="form" class="popupform">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name of the Section" id="email">
						</div>
						
						<div class="form-group">
							<textarea rows="4" class="form-control" placeholder="Description"></textarea>
						</div>
						
						<div class="form-inline">
							<div class="form-group">
								<label class="inlinelabel">Right Now</label>
								<label class="switch">
									<input type="checkbox" />
									<div class="slider round"></div>
								</label>
							</div>
						</div>
						
						<div class="form-inline">
							
							<div class="form-group pos-relative">
								<label class="inlinelabel">Scheduled</label>
								<!-- 
								<div class="datepicker_box" style="display:inline-block;">
									<input type="text" class="form-control" id="datepicker"/>
									<div id="display_cal"></div>
								</div> -->
								<input type="date" id="datep" class="datecontrol form-control" />
								<label for="datep"><img class="calender-icon" id="datepickerbtn" src="images/calender.png" /></label>
							</div>
							
							<div class="form-group">
								<label class="inlinelabel">Time</label>
								<input type="time" class="datecontrol form-control" />
							</div>
						</div>
						
						<div class="form-inline">
							<div class="form-group">
								<label class="inlinelabel">Timezone</label>
								<select class="selecttimezone btn-blue-select">
								  <option>Central Time (US & Canada)</option>
								  <option>Central Time (US & Canada)</option>
								  <option>Central Time (US & Canada)</option>
								</select>
								
							</div>
						</div>
						
						<div class="form-inline">
							<div class="form-group">
								<label class="inlinelabel">Public</label>
								<label class="switch">
									<input type="checkbox" />
									<div class="slider round"></div>
								</label>
								<label class="inlinelabel">Private</label>
							</div>
						</div>
							
					</form>
					
					<!-- First Only image Slider start -->
					<div class="row">
						<!--Owl -->
						<div id="owl-demo" class="owl-carousel">
							<div class="col-md-12">
								<div class="slide-item">
									<img src="images/slide1.jpg" alt="slide1" />
								</div>
								<div class="slide-item">
									<img src="images/slide3.jpg" alt="slide1" />
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-item">
									<img src="images/slide2.jpg" alt="slide1" />
								</div>
								<div class="slide-item">
									<img src="images/slide4.jpg" alt="slide1" />
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-item">
									<img src="images/slide1.jpg" alt="slide1" />
								</div>
								<div class="slide-item">
									<img src="images/slide3.jpg" alt="slide1" />
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-item">
									<img src="images/slide2.jpg" alt="slide1" />
								</div>
								<div class="slide-item">
									<img src="images/slide4.jpg" alt="slide1" />
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-item">
									<img src="images/slide1.jpg" alt="slide1" />
								</div>
								<div class="slide-item">
									<img src="images/slide3.jpg" alt="slide1" />
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-item">
									<img src="images/slide2.jpg" alt="slide1" />
								</div>
								<div class="slide-item">
									<img src="images/slide4.jpg" alt="slide1" />
								</div>
							</div>
						</div>
						<!--/Owl -->
					</div>
					<!-- First Only image Slider End -->
					
					<!-- First Only image Slider start -->
					<div class="row">
						<!--Owl -->
						<div id="owl-content" class="owl-carousel">
							<div class="col-md-12">
								<div class="slide-content-item">
									<img src="images/s1.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Somewhere In the <br />World</span></h2>
									</div>
								</div>
								
								<div class="slide-content-item">
									<img src="images/s3.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Raffles Center <br />Singapore</span></h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-content-item">
									<img src="images/s2.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Colorado Convention <br />Center</span></h2>
									</div>
								</div>
								
								<div class="slide-content-item">
									<img src="images/s4.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Nord Parede <br />Do Cais - Ireland</span></h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-content-item">
									<img src="images/s1.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Somewhere In the <br />World</span></h2>
									</div>
								</div>
								
								<div class="slide-content-item">
									<img src="images/s3.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Raffles Center <br />Singapore</span></h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-content-item">
									<img src="images/s2.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Colorado Convention <br />Center</span></h2>
									</div>
								</div>
								
								<div class="slide-content-item">
									<img src="images/s4.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Nord Parede <br />Do Cais - Ireland</span></h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-content-item">
									<img src="images/s1.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Somewhere In the <br />World</span></h2>
									</div>
								</div>
								
								<div class="slide-content-item">
									<img src="images/s3.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Raffles Center <br />Singapore</span></h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="slide-content-item">
									<img src="images/s2.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Colorado Convention <br />Center</span></h2>
									</div>
								</div>
								
								<div class="slide-content-item">
									<img src="images/s4.jpg" alt="slide1" />
									<div class="slide-title">
										<h2><span>Nord Parede <br />Do Cais - Ireland</span></h2>
									</div>
								</div>
							</div>
							
						</div>
						<!--/Owl -->
					</div>
					<!-- First Only image Slider End -->
					
					<div class="form-group text-center">
						<input type="submit" value="Create" class="btn btn-blue" />
					</div>
					
				</div>
				<div class="modal-footer">
				
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
@endsection

@section ('footer')
	<!-- custom scrollbar plugin -->
	<script src="{{ asset('scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	
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

@extends('layouts.app')

@section ('title')
	<title>Brunch - Home</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="home-login-header">
		
		<!-- Navigation start -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand Logo start -->
				<a href="{{ url('/') }}" class="navbar-brand"><img src="images/logo.png"></a>
				<!-- Brand Logo End -->
				
				<div class="navbar-header text-right">
					<a href="{{ url('login') }}" class="btn btn-login">Login</a>
					<button type="button" onclick="openNav()" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				
				<div id="myNav" class="overlay">
					<div class="menu-logo">
						<a href="{{ url('/') }}"><img src="images/logo.png" /></a>
					</div>
					
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					
					<div class="overlay-content">
						<a href="{{ url('about') }}">ABOUT</a>
						<a href="{{ url('contact') }}">CONTACT</a>
					</div>				
				</div>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="header-tagline">
					<h1>Webinars And Virtual Meetings</h1>
					<h2>As Never Before</h2>
					<a href="{{ url('register') }}" class="btn btn-signup">Sign Up For Free</a>
				</div>
			</div>
		</div>
    </header>
	<!-- Header start -->
	
	<!-- Home Description start-->
	<div class="home-login-page">
		<div class="container">
			<div class="col-md-12">
				<p>Brunch is a place where you can learn and share best practices through <br />
				Live webinars and Virtual Meetings...<br />
				Everything for free.</p>
			</div>
		</div>
	</div>
	<!-- Home Description End-->
@endsection

@section ('footer')
	<script>
		$('body').addClass('home-page');
	</script>
@endsection

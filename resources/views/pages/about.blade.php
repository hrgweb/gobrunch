@extends('layouts.app')

@section ('title')
	<title>Brunch - About Us</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="about-header">
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
					<h1>About <span>Brunch</span></h1>
				</div>
			</div>
		</div>
    </header>
	<!-- Header start -->
	
	<!-- Aout Description start-->
	<div class="about-page">
		<div class="container">
			<div class="col-md-12">
				<p>Brunch is a place where you can learn and share best practices through <br />
				live webinars and virtual meetings... everything for free. <br />
				The website is sponsored by Live University (formerly Febracorp)</p>
			</div>
		</div>
	</div>
	<!-- Aout Description End-->
	
	<!-- The Team start-->
	<div class="the-team">
		<div class="container">
			<div class="col-md-12">
				<h1>THE TEAM</h1>
				<p>Brunch was designed by <a href="#">Richard Lowenthal</a> and developed by a lot of talented people from all over the world.</p>
			</div>
		</div>
	</div>
	<!-- The Team End-->
@endsection

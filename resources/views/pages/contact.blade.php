@extends('layouts.app')

@section ('title')
	<title>Brunch - Contact Us</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="contact-header">
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
					<h1>Contact</h1>
				</div>
			</div>
		</div>
    </header>
	<!-- Header start -->
	
	<!-- Contact start-->
	<div class="contact-page">
		<div class="container">
			<div class="col-md-12">
				<h1>Need help using Brunch?</h1>
				<p>support@email.com</p>
			</div>
			
			<div class="col-md-12">
				<h1>Suggestions? Reach THE CEO DIRECTLY</h1>
				<p>email@email.com</p>
			</div>
		</div>
	</div>
	<!-- Contact End-->
@endsection

@section ('footer')
	<script>
		$('body').addClass('contact-bgcolor');
	</script>
@endsection

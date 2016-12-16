@extends('layouts.app')

@section ('title')
	<title>Brunch - Lobby</title>	
@endsection

@section ('content')
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
  </body>
</html>
@endsection

@section ('footer')
	{{-- <script type="text/javascript">
		$('body').addClass('home-page');
		$('header').addClass('home-header');
	</script> --}}
@endsection

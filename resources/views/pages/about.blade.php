@extends('layouts.app')

@section ('title')
	<title>Brunch - About Us</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="about-header">
    	
		@include ('partials/pages._menu')
		
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

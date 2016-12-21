@extends('layouts.app')

@section ('title')
	<title>Brunch - Home</title>
@endsection

@section ('content')
	<!-- Header start -->
    <header class="home-login-header">
		
		@include ('partials/pages._menu')
		
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
